<?php
	require_once("includes/db_connect.php");
	require_once("includes/functions.php");
	$response = array();
	$db = new DB_CONNECT();
	if( isset($_POST["id"]) && isset($_POST["phonenumber"])){
		$id = $_POST["id"];
		$number = $_POST["phonenumber"];
		$query = "SELECT * FROM family WHERE member_id = '{$number}' && family_id = '{$id}'";
		
		$result = $db->query_db($query);
		if($db->number_of_rows($result) > 0){
			$row = $db->fetch_array($result);
			$permission = $row["permission_given"];
		
			if($permission == 1){
				// now get the position of the specified user
				$query1 = "SELECT * FROM login where id = '{$number}'";
				$result1 = $db->query_db($query1);			
				if($db->number_of_rows($result1) > 0){
					$row = $db->fetch_array($result1);
					$response["success"] = 1;
					$response["latitude"] = $row["latitude"];
					$response["longitude"] = $row["longitude"];	
					$response["message"] = "You can access his location";
				}
			}else{
				// permission is 0
				$response["success"] = 0;
				$response["message"] = "The user has not provied the accces to its location";
			}
		}else{
			$response["success"] = 0;
			$response["message"] = "The user has not provied the accces to its location";
		}
	}else{
		$response["success"] = 2;
		$response["message"] = "The parameters are not set properly";
	}
	echo json_encode($response);
?>