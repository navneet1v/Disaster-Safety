<?php
	// including the some files
	require_once("includes/db_connect.php");
	// making the object of DB
	// response array for the JSON
	$response = array();
	$db = new DB_CONNECT();
	if(isset($_POST["longitude"]) && isset($_POST["latitude"])){
		$longitude = $_POST["longitude"];
		$latitude = $_POST["latitude"];
		// Change that we have to make in the long. and lat. for the DB query
		$change = 5;
		// making the query		
		$result = query_coordinates($longitude,$latitude,$change);
		if($db->number_of_rows($result)>0){
			// getting and setting the coordinates in the response array
			get_the_coordinates($result);
			$response["success"] = 1;
			echo json_encode($response);
			$encodedString =  json_encode($response);
		}else{
			// no coordinates found for the specified location
			$response["success"] = 0;
			$response["message"] = "There are no coordinates in the DB for this location";	
			$encodedString =  json_encode($response);
		}
	}else{
		// parameters are not set for the post request
		$response["success"] = 2;
		$response["message"] = "The logitude and latitudes are not set";
		echo json_encode($response);
	}
	
	
	// Now decoding the json array
	// Here true return it as an array not a string......
	$json = json_decode($encodedString,true);
	echo "<br>".$json["success"];
	
	$c = array();
	$c = $json["coordinates"];
	$a = array();
	foreach($c as $arr){
		echo "{$arr["id"]}  {$arr["longitude"]}  {$arr["type_of_help"]} <br>";
	}
	
	// return an array containg the all set of coordinates...
	function query_coordinates($longitude,$latitude,$change ){
		global $db;
		$query_string = "SELECT * FROM help WHERE 
						longitude <= ('{$longitude}' + '{$change}') && longitude >= '{$longitude}' - '{$change}' &&
						latitude <= ('{$latitude}' + '{$change}') && latitude >= '{$latitude}' - '{$change}' ";
						
		$result = $db->query_db($query_string);
		
		return $result;
	}
	
	// <--- functions for the help.php -->
	
	// getting the coordinates fetch from the result set and putting in the array
	// and then sending them in the result array ....
	function get_the_coordinates($result){
		global $response ;
		global $db;
		// making the response["coordinates"] as an array
		$response["coordinates"] = array();
		while($row = $db->fetch_array($result)){
			$coord = array();
			$coord["id"] = $row["id"];
			$coord["longitude"] = $row["longitude"];
			$coord["latitude"] = $row["latitude"];
			$coord["type_of_help"] = $row["type_of_help"];
			// pushing the coord in the response array
			array_push($response["coordinates"],$coord);
		}
	}
	
	// <-- functions for help ends here -->
		/* The JSON response would be like 
		{
			"success" : 1,
			"coordinates":[
				{
					"id" :  
					"longitude":  
					"latitude": 
					"type_of_help":	 
				},
				{
					"id" :   
					"longitude":
					"latitude":
					"type_of_help":					
				},
				{
					"id" : 
					"longitude":
					"latitude":
					"type_of_help":					
				}
			]
		}
	*/
	
?>