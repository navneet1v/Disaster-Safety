<?php
	require_once("includes/db_connect.php");
	$response = array();
	$db = new DB_CONNECT();
	$query_string = "Select * from guidelines";
	$result = $db->query_db($query_string);
	if($db->number_of_rows($result) >0)
	{
		$response["calamities"] = array();
		while($row = $db->fetch_array($result)){		
			$calamity = array();
			$calamity["id"] = $row["id"];
			$calamity["calamity"] = $row["calamity"];
			$calamity["before_cal"] = $row["before_cal"];
			$calamity["during_cal"] =  $row["during_cal"];
			$calamity["after_cal"] = $row["after_cal"];
			array_push($response["calamities"],$calamity);
		}
		$response["success"] = 1;
		echo json_encode($response);
	}
	else{
		$response["success"] = 0;
		$response["message"] = "There are no guidelines available";
		echo json_encode($response);
	}
	
	/*
		{
		
			"success" = 1;
			"calamities" = [
				{
					"id" : 1;
					"calamity" : earthq;
					"before_cal" : 
					"during_cal":
					"after_cal" :
				}
				{
					"id" : 2;
					"calamity" : drought;
					"before_cal" :
					"during_cal" :
					"after_cal" :
				}
			]
		}
	
	*/
?>