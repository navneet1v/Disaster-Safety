<?php
	require_once("/includes/session.php");
	require_once("/includes/db_connect.php");
	require_once("/includes/functions.php");
	confirm_logged_in();
	
	if(isset($_GET["url"])){
		$url = $_GET["url"];
	}else{
		$url = "newsupdate.php";
	}
?>


<html>   
<head>
	<title>DISASTER SAFETY</title>
   <link rel="stylesheet" type="text/css" href="stylesheets/common.css"/>
</head>
<body>
   <ul id="menu">
       <li><img src="images/logo.png" class="image" alt="DISASTER SAFETY" /></li>
       <li><a href="newsupdate.php" target="iframe">Update News</a></li>
       <li><a href="guidelines.php" target="iframe">Update Guidelines</a></li>
       <li><a href="addcoordinates.php" target="iframe">Add Coordinates of Location</a></li>
	  <li><a href="message_format_data.php" target="iframe">Message Format</a></li>       
	   <!--<li><a href="#"><?php echo htmlentities($_SESSION["username"]) ;?></a></li> -->
	   <li><a href="logout.php">Logout</a></li>
   </ul>  
    <iframe name="iframe" src="<?php echo htmlentities($url);?>" style="height:100%;width:100%"></iframe>

</body>
</html>