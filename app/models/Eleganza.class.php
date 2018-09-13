<?php
require_once( 'lib/woocommerce-api.php' );
require_once("MySQLConnection.class.php");

class Eleganza extends MySQLConnection {

public function getSubscriptionStatus($leads){
	$options = array(
		'debug'           => true,
		'return_as_array' => true,
		'validate_url'    => false,
		'timeout'         => 30,
		'ssl_verify'      => false,
	);
$result=array();
	try {
	$client = new WC_API_Client( 'https://eleganzamagazine.com', 'ck_06dd77388cb087845e4409cc6aa48f8fa0f7441c', 'cs_7a4f20c6917a14abaee7a8559946248a5f3d3341', $options );

  foreach  ($client->orders->get() as $orders){
    foreach($orders as $order){
      foreach($order as $key=>$value){
      if($key == 'status'){
        $status=$value;
      }
      if($key == 'customer'){
        foreach($value as $customerkey=>$customervalue){
          if($customerkey == 'email' ){
						$stauses=array();
						//print_r($leads);
						foreach($leads as $lead){
							$val=array();
							if(strcmp($customervalue,$lead['email']) == 0){
								$val[$lead['id']]= $status;
								array_push($result,$val);
						}
						}
          }
        }

      }
      }
    }
  }
} catch ( WC_API_Client_Exception $e ) {
	echo $e->getMessage() . PHP_EOL;
	echo $e->getCode() . PHP_EOL;
if ( $e instanceof WC_API_Client_HTTP_Exception ) {
		print_r( $e->get_request() );
		print_r( $e->get_response() );
	}
}
return $result;
}

public function updateSubscriptionStatus($db,$agent_fk){
	$query = $this->myDB->prepare("SELECT * FROM subscriber WHERE agent_fk = ?");
	$query->execute(array($agent_fk));
	$leadsL = array();
	while ($cRecord = $query->fetch(PDO::FETCH_ASSOC)) {
  $leadsL[] = $cRecord;
	}

	$statuses=$this->getSubscriptionStatus($leadsL);
	foreach($leadsL as $l){
		$subId=0;
		$status='';
		foreach($statuses as $statusArr){
		if(array_key_exists($l['id'],$statusArr)){
			$status=$statusArr[$l['id']];
		}else{
			$status='Not Subscribed';
		}
	}
	$funnelswitch=$this->getFunnelSwitch($db,$status,$l);
	//$comma_separated_statuses = implode(",", $statuses[$l['id']]);
	$query = $this->myDB->prepare("UPDATE subscriber SET order_status = ?, funnel_switch=? WHERE id = ?");
	$query->execute(array($status,$funnelswitch, $l['id']));
	}
}
public function getFunnelSwitch($db,$status,$l){
//	foreach($statuses as $status){
		if($status == 'completed' || $status == 'processing'){
			$db->addBlacklist($l['email']);
			return 3;
		}
	//}
	return 1;
}
}
?>
