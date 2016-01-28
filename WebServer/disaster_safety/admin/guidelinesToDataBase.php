<?php
	require_once("/includes/session.php");
	require_once("/includes/db_connect.php");
	require_once("/includes/functions.php");
	confirm_logged_in();
	$db = new DB_CONNECT();
	if(isset($_POST["calamity"]) && isset($_POST["before_cal"]) && isset($_POST["after_cal"])&& isset($_POST["during_cal"])){
		
		$calamity = trim($db->mysql_prep($_POST["calamity"]));
		$before_cal = trim($db->mysql_prep($_POST["before_cal"]));
		$after_cal = trim($db->mysql_prep($_POST["after_cal"]));
		$during_cal = trim($db->mysql_prep($_POST["during_cal"]));
		
		if(strlen($calamity) != 0 && strlen($before_cal) && strlen($after_cal) && strlen($during_cal) ){
			$queryString = "INSERT INTO guidelines ( calamity , during_cal, after_cal , before_cal ) VALUES( '{$calamity}','{$during_cal}','{$after_cal}' ,'{$before_cal}') ";
			echo $queryString;
			$result = $db->query_db($queryString);
			if($result){
				//$_POST["message"] = "Inserted to the database";
				redirect_to("guidelines.php?message=Inserted to the database");
			}else{
				echo "Cannot be inserted";
			}
		}else{
			redirect_to("guidelines.php?message=Cannot be inserted. Some Values are Missing");
		}
	}else{
		echo "Problem in the post request";
	}
?>