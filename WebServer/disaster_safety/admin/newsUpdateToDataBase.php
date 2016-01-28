<?php
	require_once("/includes/db_connect.php");
	require_once("/includes/functions.php");
	require_once("/includes/session.php");
	confirm_logged_in();
	$db = new DB_CONNECT();
	if(isset($_POST["info"]) && isset($_POST["notification"]) && isset($_POST["date"])){
		
		$info = trim($db->mysql_prep($_POST["info"]));
		$notification = trim($db->mysql_prep($_POST["notification"]));
		$date = trim($db->mysql_prep($_POST["info"]));
		
		$queryString = "INSERT INTO news ( info , date , notification ) VALUES( '{$info}','{$date}' , '{$notification}') ";
		$result = $db->query_db($queryString);
		if($result){
			//$_POST["message"] = "Inserted to the database";
			redirect_to("newsupdate.php?message=Inserted to the database");
		}else{
			echo "Cannot be inserted";
		}
	}else{
		echo "Problem in the post request";
	}
	
?>