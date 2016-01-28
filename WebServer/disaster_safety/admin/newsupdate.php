<?php
	require_once("/includes/db_connect.php");
	require_once("/includes/functions.php");
	require_once("/includes/session.php");
	confirm_logged_in();
	if(isset($_GET["message"])){
		$message = $_GET["message"];
	}else{
		$message = "";
	}	
?>

<html lang="en" class="no-js">
<head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">

<title>NEWS UPDATE</title>
  <link rel="stylesheet" type="text/css" href="stylesheets/demo.css">
  <link rel="stylesheet" type="text/css" href="stylesheets/style.css">
  <link rel="stylesheet" type="text/css" href="stylesheets/animate-custom.css">
</head>
<body>
   <script type="text/javascript" src="jquery.js"></script>
<div class="container"> 
  <div class="codrops-top">
    <div class="clr"></div>
  </div>
    <div id="container_demo"> 
   
      <a class="hiddenanchor" id="toregister"></a> <a class="hiddenanchor" id="tologin"></a>
      <div id="wrapper">
        <div id="login" class="animate form">
          <form action="newsUpdateToDataBase.php" autocomplete="on" method="post">
            <h1>Update News</h1>
            <p>
              <label for="notification" class="notification">Notification</label><br>
			  <textarea rows="2" cols="60" type="text" name="notification" placeholder=" Notification" required="" ></textarea>
            </p>
            <p>
              <label for="info" class="info" > Info </label><br>
			  <textarea rows="4" cols="60" type="text" name="info" placeholder=" Info" required="" ></textarea>
            </p>
           <p>
				<label for="date" class="date">Date</label><br>
			 <input type="date" name="date" placeholder=" Date" required="" />  
            </p>
            <p class="login button">
              <input type="submit" value="Add" >
            </p>
          </form>
		<h2><?php echo htmlentities($message); ?> </h2>
        </div>
      </div>
    </div>
</div>
</body>
</html>