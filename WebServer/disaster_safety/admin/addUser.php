<?php
	require_once("/includes/session.php");
	require_once("/includes/db_connect.php");
	require_once("/includes/functions.php");
	
	confirm_logged_in();
	
	$db = new DB_CONNECT();
	$message = "";
	if(isset($_POST["submit"])){
		$user_id = trim($db->mysql_prep($_POST["username"]));
		$password = trim($db->mysql_prep($_POST["password"]));
		$hashed_password = sha1($password); // for the hashing of the password
		
		$queryString = "SELECT * FROM adminUser WHERE user_id='{$user_id}'";
		$result = $db->query_db($queryString);
		if($db->number_of_rows($result) > 0){
			$message = "The user is already added with the same Username";
		}else{
			$queryString = "INSERT INTO adminUser (username , password) VALUES('{$user_id}' , '{$hashed_password}')";
			$result = $db->query_db($queryString);
			if($result){
				$_SESSION["username"] = $user_id;
				redirect_to("firstpage.php");
			}else {
				$message = "There is a problem in the query";
			}
		}
	}
?>

<html lang="en" class="no-js">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">
<title>DISASTER SAFETY Sign Up</title>
  <link rel="stylesheet" type="text/css" href="stylesheets/demo.css">
  <link rel="stylesheet" type="text/css" href="stylesheets/style.css">
  <link rel="stylesheet" type="text/css" href="stylesheets/animate-custom.css">
</head>
<body>
  <script type="text/javascript" src="jquery/jquery.js"></script>
  <font size="100%" color="blue" ><center><h1>DISASTER SAFETY</h1></center></font>
<div class="container"> 
  <!-- Codrops top bar -->
  <div class="codrops-top">
  <div class="clr"></div>
  </div>
    <div id="container_demo">    
      <a class="hiddenanchor" id="toregister"></a> <a class="hiddenanchor" id="tologin"></a>
      <div id="wrapper">		
        <div id="login" class="animate form">
          <form action="addUser.php" autocomplete="on" method="post">
            <h1>Add User</h1>
            <p>
              <label for="username" class="uname">Username </label>
              <input id="username" name="username" required="" type="text" placeholder="Username">
            </p>
            <p>
              <label for="password" class="youpasswd" > Password </label>
              <input id="password" name="password" required="" type="password" placeholder="Password">
            </p>           
            <p class="login button">
              <input type="submit" value="Add User" name="submit" >
            </p>
          </form>
		  <h2><?php echo htmlentities($message);?><h2>
        </div>
      </div>
    </div>
</div>
</body>
</html>