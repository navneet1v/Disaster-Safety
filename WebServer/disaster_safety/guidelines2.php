<?php
	require_once("includes/db_connect.php");
	$db = new DB_CONNECT();
	$response = array();
	$query_string = "SELECT * FROM guidelines";
	
	$result = $db->query_db($query_string);
	$response["calamities"] = array();
	if($db->number_of_rows($result)>0){
		while($row = $db->fetch_array($result)){
			$calamity = array();
			$calamity["id"] = $row["id"];
			$calamity["calamity"] = $row["calamity"];
			$calamity["before_cal"] = $row["before_cal"];
			$calamity["after_cal"] = $row["after_cal"];
			$calamity["during_cal"] = $row["during_cal"];
			array_push($response["calamities"],$calamity);
		}
		$response["success"] = 1;
	}else{
		$response["success"] = 0;
		$response["message"] = "There is some problem in the database query";
	}
	echo json_encode($response);
	
	/*
		{
			"success" : 1
			"calamities":[
				{
					"id" : ,
					"calamity" : ,
					before_cal : ,
					during_cal : ,
					after_Cal : ,
				},
				{
					"id" : ,
					"calamity" : ,
					before_cal : ,
					during_cal : ,
					after_Cal : ,
				},
				{
					"id" : ,
					"calamity" : ,
					before_cal : ,
					during_cal : ,
					after_Cal : ,
				},
			]
			
		}
	*/
	
?>