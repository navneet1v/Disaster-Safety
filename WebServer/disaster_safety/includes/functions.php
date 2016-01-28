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
	// redirecting to some page
	function redirect_to($location = NULL){
		if($location !=NULL){
			header("Location: {$location}");
			exit;
		}
	}
	// check the long and lati are numeric or not
	function check_the_data($s1 , $s2){
		if(is_numeric($s1) && is_numeric($s2) ){
			return true;
		}else{
			return false;
		}
	}
	
	function decode_JSON($phonenumbers){
		// frist step is we remove all the space and '-' marks and \n
		
		$phonenumbers = str_replace(" " , "" , $phonenumbers);
		$phonenumbers = str_replace(PHP_EOL , "" , $phonenumbers);

		$phonenumbers = str_replace(" ", "" , $phonenumbers);
		$phonenumbers = str_replace('-', "" , $phonenumbers);
		
		// now decode the JSON
		// removing a notation to make it in an array '{'
		$phonenumbers = substr($phonenumbers,16);
		//echo $phonenumbers . "<br><br>";
		$phonenumbers = substr($phonenumbers, 0 , -1);
		//echo $phonenumbers . "<br><br>";
		$phonearrays = json_decode($phonenumbers,true);
		return $phonearrays;
		/*foreach($phonearrays as $array){
			// here i am getting a single number at a time so just check this with your database
		
			
			$original_number = $array["phonenumber"];
			if($original_number[0] == '+'){
				$number = substr($original_number,3);			
			}else if( $original_number[0] == '0' ){
				$number = substr($original_number,1);
			}
			if(strlen($number) == 10)
				echo $number . "<br>";	
			else 
			echo "No " . $number . "<br>";
		}*/
		
	}
	
?>