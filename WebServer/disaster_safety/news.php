<?php
	// including the some files
	require_once("includes/db_connect.php");
	// making the object of DB
	// response array for the JSON
	$response = array();
	$db = new DB_CONNECT();
	// making the query
	$query_string = "SELECT * FROM news";
	$result = $db->query_db($query_string);
	if($db->number_of_rows($result)>0){
		// JSON news array 
		$response["news"] = array();
		while($row = $db->fetch_array($result)){
			// Setting the fileds
			$news = array();
			$news["id"] = $row["id"];
			$news["notification"] = $row["notification"];
			$news["info"] = $row["info"];
			$news["date"] = $row["date"];
			array_push($response["news"] , $news);
		}
		$response["success"] = 1;
	}else{
		// There is no news in the database
		$response["success"] = 0;
		$response["message"] =  "There is no news in the in the table";
	}
	// echoing the JSON response
	echo json_encode($response);
	
	/*
	
		{
			"news":[
				{
					"id": 12 ,
					"notification": "Delhi earthquake" ,
					"info": "Full detail of t news" ,
					"date": "27-10-2014" ,
				},
				{
					"id": 12,
					"notification": "Delhi earthquake",
					"info": "Full detail of t news",
				},
				{
					"id": 12
					"notification": "Delhi earthquake"
					"info": "Full detail of t news"
				}				
			]			
			"success": 1
		}
	
	*/
	
	
?>