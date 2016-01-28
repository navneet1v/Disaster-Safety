<?php
	// including the some files
	require_once("includes/db_connect.php");
	require_once("includes/functions.php");
	// making the object of DB
	// response array for the JSON
	$response = array();
	$db = new DB_CONNECT();
	if(isset($_POST["member_id"]) && isset($_POST["famliy_id"])){
		// removing extra space and sql injections
		$member_id = trim($db->mysql_prep($_POST["member_id"]));
		$family_id = trim($db->mysql_prep($_POST["family_id"]));
		if(is_present($family_id)){
			$query_string = "INSERT INTO people (member_id , family_id) VAlUES('{$member_id}' , '{$family_id}')";			
			$result = $db->query_db($query_string);
			
			if($result){
				$response["success"] = 1;
				$response["message"] = "The family member is added in the list.";
			}else{
				$response["success"] = 0;
				$response["message"] = "The family member is not added in the database ";
			}						
		}else{
			$response["success"] = 0;
			$response["message"] = "The family member is not registered...";
		}
	}else{
		$response["success"] = 0;
		$response["message"] = "The contact number and the name is not set";
	}
	echo json_encode($response);
	
	/*
		{
			"success" : 1,
			"message" : "The family member is successfully added in the database"
		}	
	*/
	
?>