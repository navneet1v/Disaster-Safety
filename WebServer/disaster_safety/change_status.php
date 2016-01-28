<?php
	require_once("includes/db_connect.php");
	require_once("GCM.php");
	$db = new DB_CONNECT();
	$response = array();
	// here is the get request
	if(isset($_POST["status"]) && isset($_POST["id"]) && isset($_POST["longitude"]) && isset($_POST["latitude"]) ){
		$status = $_POST["status"];
		$id = $_POST["id"];
		$longitude = $_POST["longitude"];
		$latitude = $_POST["latitude"];
		$query_string = "Update login set status='{$status}' , longitude = '{$longitude}' , latitude = '{$latitude}' WHERE 	id='{$id}'";
		$result = $db->query_db($query_string);
		if($result){
			$response["success"] = 1;
			$response["message"] = "The status was Changed successfully";
		}else{
			$response["success"] = 0;
			$response["message"] = "The status was not changed error in query";
		}
		echo json_encode($response);
		// work with the notifications
		send_notification($status , $id);
		
	}else{
		$response["success"] = 0;
		$response["message"] = "Error in the paramters";
		echo json_encode($response);
	}
	
	/*
		{
			"success" : 1,
			"message": "The status was changed successfully"
		}
	
	*/
	
	function send_notification($status , $id){
		global $db;
		$gcm = new GCM();
		if($status == 0 || $status == "0"){
			$query = "SELECT * FROM login,family WHERE member_id = '{$id}' AND id = family_id ";
			$result = $db->query_db($query);
			if($db->number_of_rows($result)>0){
				while($row = $db->fetch_array($result)){				
					$regId = $row["gcm_regId"];
					$message = " is in danger";
					$registatoin_ids = array($regId);
					$message = array("message" => $message , "id"=> $id);
					
					$notification_result = $gcm->send_notification($registatoin_ids, $message);
				}
			}else{
				// no family members are found
			}
		}
	}
	
?>