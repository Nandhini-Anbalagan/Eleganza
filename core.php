<?php
	include("app/head.php");

	if(isset($_POST['signUp'])){
		$email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

		if(trim($_POST['name']) == "" || trim($_POST['email']) == "" || trim($_POST['phone']) == "" || trim($_POST['areas']) == "" || trim($_POST['state']) == "" ){
			$msg = $_POST['lang'] == 'EN'?'Sorry, all fields are required!':'Désolé, tous les champs sont nécessaires!';
			header('Content-type: text/json');
			echo json_encode(array("error"=>'1', "msg"=>$msg));
			exit();
		}

		if(!preg_match($email_exp,$_POST['email'])) {
			$msg = $_POST['lang'] == 'EN'?'Sorry, email field is invalid!!':'Désolé, le champs courriel est invalid!';
			header('Content-type: text/json');
			echo json_encode(array("error"=>'1', "msg"=>$msg));
			exit();
		}

		if(!$db->getAgentLeadsByEmail($_POST['email'])){

			$_POST['country'] = explode(",", $_POST['state'])[1];
			$_POST['state'] = explode(",", $_POST['state'])[0];
			$_POST['buyer_option']=0;
			$_POST['seller_option']=1;
			$_POST['agency']='';
			$_POST['ref']='';
			if($db->addToAgentLeads($_POST)){
				print_r("Insssssss");
			if($_POST['industry'] == 'SI'){
				$frenchID = $db->getFunnelCatByTitle('Service Industry FR', 2)['id'];
				$englishID = $db->getFunnelCatByTitle('Service Industry EN', 2)['id'];
			}else if($_POST['industry'] == 'MI'){
				$frenchID = $db->getFunnelCatByTitle('Manufacturing Industry FR', 2)['id'];
				$englishID = $db->getFunnelCatByTitle('Manufacturing Industry EN', 2)['id'];
			}else{
				$frenchID = $db->getFunnelCatByTitle('Retail Industry FR', 2)['id'];
				$englishID = $db->getFunnelCatByTitle('Retail Industry EN', 2)['id'];
			}

			if($_POST['lang'] == 'EN'){
				$_POST['lang']='e';
				$funnelID = $englishID;
			}else{
				$_POST['lang']='f';
				$funnelID = $frenchID;
			}
		    $lead_id= $db->insertSponsor($_POST['industry'], 2, 'w', $_POST['lang'], $funnelID,$_POST['name'], $_POST['phone'], $_POST['email'], $_POST['areas'], '', '');
				//echo $db->updateEntries($_POST['name'], $_POST['phone'], $_POST['email'], $_POST['areas'], '', '', $lead_id);
				$to = $_POST['email'];
				$from = "support@unbeleadsable.com";

				if($_POST['lang'] == 'EN'){
					$subject = "Registration Confirmation";
					$template = $db->getTemplateBySlug('registration-confirmation-en');
				}else{
					$subject = "Confirmation d'inscription";
					$template = $db->getTemplateBySlug('registration-confirmation-fr');
				}

				//confirmation email to lead
				$message = html_entity_decode($template['content']);
				Functions::sendEmail($from,$to,$subject,$message);

				//confirmation email to admin(s)
				$to = 'sales@unbeleadsable.com';
				$to2 = 'matteofiorilli@gmail.com';

				$from = "support@unbeleadsable.com";
				$subject = "New Lead Registration";
				$message = "Hello there, just to let you know you have new lead registration.<br><br>";
				$message .= "Name: " . $_POST['name'] . "<br>";
				$message .= "Email: " . $_POST['email'] . "<br>";
				$message .= "Phone: " . $_POST['phone'] . "<br>";
				$message .= "Industry: " . $_POST['industry'] . "<br>";
				$message .= "Area: " . $_POST['areas'] . "<br>";
				$message .= "Province: " . $_POST['state'] . "<br>";
				$message .= "Agency: " . $_POST['agency'] . "<br>";
				$message .= "Language: " . $_POST['lang'] . "<br>";

				if($_POST['ref'] != "")
					$message .= "Reference Code: " . $_POST['ref'] . "<br>";

				$message .= "<br>Thank, you";

				Functions::sendEmail($from,$to,$subject,$message);
				Functions::sendEmail($from,$to2,$subject,$message);

				/*SMS to Matteo*/
				$id 	= "AC56ea9bbf60388f2c561911073dbbd132";
				$token 	= "69b120a331f8972f5071f294cf90ca2f";
				$url 	= "https://api.twilio.com/2010-04-01/Accounts/$id/Messages";
				$from 	= "+14387938975";
				$to 	= "+15147076288";

				$body = "New lead registration\nName: ".$_POST['name']."\nPhone: ".$_POST['phone']."\nEmail: ".$_POST['email']."\nReference Code: ".$_POST['ref'];

				$data = array (
					'From' => $from,
					'To' => $to,
					'Body' => $body,
				);

				$post = http_build_query($data);
				$x = curl_init($url );
				curl_setopt($x, CURLOPT_POST, true);
				curl_setopt($x, CURLOPT_RETURNTRANSFER, true);
				curl_setopt($x, CURLOPT_SSL_VERIFYPEER, false);
				curl_setopt($x, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
				curl_setopt($x, CURLOPT_USERPWD, "$id:$token");
				curl_setopt($x, CURLOPT_POSTFIELDS, $post);
				curl_exec($x);
				curl_close($x);$msg = "";

      }else
        $msg = "";

    }else
      $msg = $_POST['lang'] == 'EN'?'Sorry, email already in use!':'Désolé, ce courriel est déjà existant!';


	header('Content-type: text/json');


    if($msg == "")
      echo json_encode(array("success"=>'1', "msg"=>$msg, "lang"=>$_POST['lang']));
    else
      echo json_encode(array("success"=>'0', "msg"=>$msg));

    die();
  }

  if(isset($_POST['contactUs'])){
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

    if(trim($_POST['name']) == "" || trim($_POST['email']) == "" || trim($_POST['phone']) == "" || trim($_POST['message']) == ""){
      $msg = $_POST['lang'] == 'EN'?'Sorry, all fields are required!':'Désolé, tous les champs sont nécessaires!';
      header('Content-type: text/json');
      echo json_encode(array("error"=>'1', "msg"=>$msg));
      exit();
    }

		if(!preg_match($email_exp,$_POST['email'])) {
			$msg = $_POST['lang'] == 'EN'?'Sorry, email field is invalid!!':'Désolé, le champs courriel est invalid!';
			header('Content-type: text/json');
			echo json_encode(array("error"=>'1', "msg"=>$msg));
			exit();
		}

    //confirmation email to admin(s)
		$to = 'support@unbeleadsable.com';
		$to2 = 'barbara@unbeleadsable.com';
		$to3 = 'matteo@unbeleadsable.com';

		$from = "support@unbeleadsable.com";

		$subject = "Contact request from Eleganza Digital Media";
		$message = "Hello there, You have a new message from your website.<br><br>";
		$message .= "Name: " . $_POST['name'] . "<br>";
		$message .= "Email: " . $_POST['email'] . "<br>";
		$message .= "Phone: " . $_POST['phone'] . "<br>";
		$message .= "Industry: " . $_POST['industry'] . "<br>";
		$message .= "Area: " . $_POST['areas'] . "<br>";
		$message .= "State: " . $_POST['state'] . "<br>";
		$message .= "Agency: " . $_POST['agency'] . "<br>";
		$message .= "Reference: " . $_POST['ref'] . "<br>";
		$message .= "<br>Thank, you";

		Functions::sendEmail($from, $to, $subject, $message);
		Functions::sendEmail($from, $to2, $subject, $message);
		Functions::sendEmail($from, $to3, $subject, $message);

		$msg = "";

		header('Content-type: text/json');
		echo json_encode(array("success"=>'1', "msg"=>$msg));

		die();
	}

?>
