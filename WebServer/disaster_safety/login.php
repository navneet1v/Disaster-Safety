<?php
	// including the some files
	require_once("includes/db_connect.php");
	require_once("GCM.php");
	// making the object of DB
	// response array for the JSON
	$response = array();
	$db = new DB_CONNECT();
	$gcm = new GCM();
	if(isset($_POST["id"]) && isset($_POST["name"]) && isset($_POST["regId"]) ){
		// removing the sql injections and extra space after the text
		$id = trim($db->mysql_prep($_POST["id"]));
		$name = trim($db->mysql_prep($_POST["name"]));		
		$regId = trim($db->mysql_prep($_POST["regId"]));
		
		// Check if the contact is already there or not
		// We can reduce two queries to DB but to make it simple i have used 2 queries		
		$query_string = "SELECT * from login where id='{$id}'";
		$result = $db->query_db($query_string);
		if(!($db->number_of_rows($result)>0)){
			// insertion is successfully
			$query_string = "INSERT INTO login (id,name,gcm_regId) VALUES('{$id}','{$name}','{$regId}')";
			$result = $db->query_db($query_string);
			$response["success"] = 1;
			$response["message"] = "The user is successfully registered";
			$response["status"] = 1;
			// now do the work of the GCM 			
			/*$registatoin_ids = array($regId);
			$message = array("message" => "You are registered with Disaster Saftey app");
			$result = $gcm->send_notification($registatoin_ids, $message);*/
			
			//echo json_encode($response);
		}else{
			$query = "UPDATE login set name='{$name}' , gcm_Id = '{$regId}' WHERE id='{$id}'";			
			$result = $db->query_db($query);
			// fetch the id elements now after updating
			$query = "SELECT * FROM login where id='{$id}'";
			$result = $db->query_db($query);
			// encode the json
			$response["success"] = 0;
			$response["message"] = "The user registration is failed because he is already registered";
			$row = $db->fetch_array($result);
			$response["status"] = $row["status"];
			//echo json_encode($response);
			// now do the work of the GCM 			
			/*$registatoin_ids = array($regId);
			$message = array("message" => "Welcome again");
			$result = $gcm->send_notification($registatoin_ids, $message);
			echo $result;*/
		}
	}else{
		// The parameters are not set
		$response["success"] = 2;
		$response["message"] = "There is no parameters set in the post request";
		$response["status"] = -1;
		//echo json_encode($response);
	}
	
	echo json_encode($response);
	
?>