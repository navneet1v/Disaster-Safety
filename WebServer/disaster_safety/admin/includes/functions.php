<?php
	// this file contains some functions
	// including the some files with some global declartions	
	
	// <-- Method not used but a can be used if we are seeing the errors in the query string -->
	function is_present($contact_number){
		global $db;
		$query_string = "SELECT * FROM login where contact_number = '{$contact_number}'";
		$result = $db->query_db($query_string);
		if($db->number_of_rows($result)>0){
			// Contact number is present
			return true;
		}else{
			// Contact number is absent
			return false;
		}
	}
	
	function redirect_to($location = NULL){
		if($location !=NULL){
			header("Location: {$location}");
			exit;
		}
	}
	
	
?>