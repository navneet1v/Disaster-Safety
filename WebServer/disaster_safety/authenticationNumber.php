<?php
	$response = array();
		$number = makeTheAuthenticationNumber();
		$response["authenticationnumber"] = $number;
		$response["success"] = 1;
		echo json_encode($response);
	
	function makeTheAuthenticationNumber(){
		$file = "authentication_number.txt";
		$content = file_get_contents($file);
		$temp = $content;
		$content = 0;
		$something = 1;
		$count = 0;
		$cont = 1;
		while($count < 6){
			$r = $temp % 10;
			$r = ($r + $something)%10;
			if($r == 0){
				if($cont == 10){
					$cont = 1;
					$r = 4;
				}else{
					$cont = $cont + 1;
					continue;
				}
			}
			$something = $r + $something;
			$content = ($content *10) + $r;
			$temp = $temp / 10;
			$count = $count + 1;
		}
		
		if($content >= 10000000){
			//echo "hell";
			$content = 987546;
		}
		
		file_put_contents($file,$content);
		return $content;
	}
	
	
	
?>