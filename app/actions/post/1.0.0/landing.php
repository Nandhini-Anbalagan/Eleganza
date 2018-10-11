<?php
	switch ($_POST['case']) {
		case "view-seller":
			if(isset($_POST['id'])){
				$page = $db->getSellerLandingPage($_POST['id']);
				if($page){
					$resultObj['callback-data'] = $page;
					$resultObj['no-message'] = true;
					$resultObj['callback'] = 'get-seller-landing-page';
				}else
					$resultObj['error'] = "Invalid Agent.";
			}else
				$resultObj['error'] = "Unknown Agent.";
		break;
		case "view-buyer":
			if(isset($_POST['id'])){
				$page = $db->getBuyerLandingPage($_POST['id']);
				$page['agent_fk'] = IDObfuscator::encode($page['agent_fk']);
				if($page){
					$resultObj['callback-data'] = $page;
					$resultObj['no-message'] = true;
					$resultObj['callback'] = 'get-buyer-landing-page';
				}else
					$resultObj['error'] = "Invalid Agent.";
			}else
				$resultObj['error'] = "Unknown Agent.";
		break;
		case "edit-seller":
			/*if(Functions::isValidFields($_POST,
				array('name', 'email', 'phone', 'areas', 'agency'),
				array(5, 'email', 9, 'empty', 2),
				$resultObj['error'])){*/

				if(isset($_POST["uploadedBg1"]) && !empty($_POST["uploadedBg1"])){
					Functions::moveFile("temp/" . $_POST["uploadedBg1"], "uploads/landings/" . $_POST["uploadedBg1"]);
					$_POST["defaultBackground1"] = $_POST["uploadedBg1"];
				}
				if(isset($_POST["uploadedBg2"]) && !empty($_POST["uploadedBg2"])){
					Functions::moveFile("temp/" . $_POST["uploadedBg2"], "uploads/landings/" . $_POST["uploadedBg2"]);
					$_POST["defaultBackground2"] = $_POST["uploadedBg2"];
				}
				if(isset($_POST["uploadedBg3"]) && !empty($_POST["uploadedBg3"])){
					Functions::moveFile("temp/" . $_POST["uploadedBg3"], "uploads/landings/" . $_POST["uploadedBg3"]);
					$_POST["defaultBackground3"] = $_POST["uploadedBg3"];
				}

				if(!$db->editSellerLandingPage($_POST))
					$resultObj['error'] = Config::UNEXPECTED_DB_ERROR;
				else
					$resultObj['success'] = "Landing page edited successfully.";
			//}

			if($resultObj['error'] == "-1"){
				$resultObj['callback'] = "get-seller-landing-page";
				Tokenizer::delete(array('post-action-lead','post-action-lead-edit'));
			}
		break;
		case "edit-buyer":
			/*if(Functions::isValidFields($_POST,
				array('name', 'email', 'phone', 'areas', 'agency'),
				array(5, 'email', 9, 'empty', 2),
				$resultObj['error'])){*/

				if(isset($_POST["uploadedBg1"]) && !empty($_POST["uploadedBg1"])){
					Functions::moveFile("temp/" . $_POST["uploadedBg1"], "uploads/landings/" . $_POST["uploadedBg1"]);
					$_POST["defaultBackground1"] = $_POST["uploadedBg1"];
				}
				if(isset($_POST["uploadedBg2"]) && !empty($_POST["uploadedBg2"])){
					Functions::moveFile("temp/" . $_POST["uploadedBg2"], "uploads/landings/" . $_POST["uploadedBg2"]);
					$_POST["defaultBackground2"] = $_POST["uploadedBg2"];
				}
				if(isset($_POST["uploadedBg3"]) && !empty($_POST["uploadedBg3"])){
					Functions::moveFile("temp/" . $_POST["uploadedBg3"], "uploads/landings/" . $_POST["uploadedBg3"]);
					$_POST["defaultBackground3"] = $_POST["uploadedBg3"];
				}

				if(!$db->editBuyerLandingPage($_POST))
					$resultObj['error'] = Config::UNEXPECTED_DB_ERROR;
				else
					$resultObj['success'] = "Landing page edited successfully.";
			//}

			if($resultObj['error'] == "-1"){
				$resultObj['callback'] = "get-buyer-landing-page";
				Tokenizer::delete(array('post-action-lead','post-action-lead-edit'));
			}
		break;
		case "picture":
			$ext = pathinfo(basename($_FILES["file"]["name"]), PATHINFO_EXTENSION);
			$fileName = "cust_" . time() . ".$ext";
			move_uploaded_file($_FILES['file']['tmp_name'], "temp/$fileName");
			$resultObj['no-message'] = true;
			exit($fileName);
		break;
	}
?>
