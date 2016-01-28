<?php
	/*
		JSON request is in the form of (Get request will be there with the id of the current user) 
		{
			"phonenumbers":[
				{
					"phonenumber":"8950683510";
				},
				{
					"phonenumber":"8950683512";
				},
				{
					"phonenumber":"8950683543";
				}
			]
		}
	*/
	require_once("includes/db_connect.php");
	require_once("includes/functions.php");
	$response = array();
	$db = new DB_CONNECT();
	// To count how many number are added in the table family
	$count = 0 ;

	if(isset($_POST["contacts"]) && isset($_POST["id"])){
		// fecthing the json string encoded from the url and decoding it into the json array
		//$json = json_decode($_POST["contacts"],true);
		$phonearrays = decode_JSON($_POST["contacts"]);
		
		$id = $_POST["id"];
		$number = array();			
		$response["phonenumbers"] = array();
		foreach($phonearrays as $number){
			// convert the number
			$original_number = $number["phonenumber"];			
			if( $original_number[0] == '0' ){
				$number = substr($original_number,1);
				$original_number = "+91".$number;
			}
			else if($original_number[0] == '+'){
				// do nothing every thing is fine
			}else {
				$original_number = "+91".$original_number;
			}
			$query_string = "SELECT * FROM login WHERE id = '{$original_number}'";
			$result = $db->query_db($query_string);
			
			if($db->number_of_rows($result)>0){
			
				$row = $db->fetch_array($result);
				// If number["phonenumber"] is found in the login table...
				// Check if it is already added or not...
				$query_string2 = "SELECT * FROM family WHERE family_id = '{$original_number}'
								  && member_id = '{$id}'";
				$result2 = $db->query_db($query_string2);				
				
				if($db->number_of_rows($result2)>0){
					
				}
				else{					
					$query_string3 = "INSERT INTO family(member_id,family_id) VALUES('{$id}','{$original_number}')";
					$result3 = $db->query_db($query_string3);															
				}
			}			
		}		
		$queryString = "SELECT * FROM family,login WHERE member_id = '{$id}' && id = family_id";
		$result = $db->query_db($queryString);										
		$addednumbers = array();
		if($db->number_of_rows($result)>0){
			while($row = $db->fetch_array($result)){
				$addednumbers["phonenumber"] = $row["id"];			
				$addednumbers["status"] = $row["status"] ;
				$addednumbers["name"] = $row["name"];
				$addednumbers["longitude"] = $row["longitude"];				
				$addednumbers["latitude"] = $row["latitude"];
				$addednumbers["permission_given"] = $row["permission_given"];
				array_push($response["phonenumbers"],$addednumbers);
			}
			$response["success"] = 1;
			$response["message"] = "contacts are synced";
		}else{
			$response["success"] = 0;
			$response["message"] = "No new contacts to add in the database";
		}
		
	}else{
		$response["success"] = 2;
		$response["message"] = "Parmeters are not set correctly in the request";
	}
	echo json_encode($response);
	
	/*
		{
			"success" : 1,			
			"message" : "The list has been updated",
			"phonenumbers":[
				{
					"phonenumber": "334543"
					"status": "0";
				},
				{
					"phonenumber":"3443543";
					"status":"1"
				}
			]
		}
	*/
	
?>