<?php
	
	require_once("/includes/session.php");
	require_once("/includes/db_connect.php");
	require_once("/includes/functions.php");
	confirm_logged_in();
	$db = new DB_CONNECT();
	if(isset($_POST["latitude"]) && isset($_POST["longitude"]) && isset($_POST["type_of_help"])){
		
		$latitude = trim($db->mysql_prep($_POST["latitude"]));
		$longitude = trim($db->mysql_prep($_POST["longitude"]));
		$type_of_help = trim($db->mysql_prep($_POST["type_of_help"]));
		
		$queryString = "INSERT INTO help ( longitude , latitude , type_of_help ) VALUES( '{$longitude}','{$latitude}' , '{$type_of_help}') ";
		$result = $db->query_db($queryString);
		if($result){
			//$_POST["message"] = "Inserted to the database";
			redirect_to("addcoordinates.php?message=Inserted to the database");
		}else{
			echo "Cannot be inserted .Query Failed";
		}		
	}else{
		echo "Problem in the post request";
	}	
?>