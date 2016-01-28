<?php
	require_once("/includes/session.php");
	require_once("/includes/db_connect.php");
	require_once("/includes/functions.php");
	
	confirm_logged_in();
	if(isset($_GET["message"])){
		$message = $_GET["message"];
	}else{
		$message = "";
	}	
?>

<html lang="en" class="no-js"><!--<![endif]--><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta charset="UTF-8">

<title>Add coordinates</title>
  <link rel="stylesheet" type="text/css" href="stylesheets/demo.css">
  <link rel="stylesheet" type="text/css" href="stylesheets/style.css">
  <link rel="stylesheet" type="text/css" href="stylesheets/animate-custom.css">
  <script>
	function isNumberKey(evt)
       {
          var charCode = (evt.which) ? evt.which : evt.keyCode;
          if (charCode != 46 && charCode > 31 
            && (charCode < 48 || charCode > 57))
             return false;

          return true;
       }
  </script>
</head>
<body>
  <script type="text/javascript" src="stylesheets/jquery.js"></script>
<div class="container"> 
  <!-- Codrops top bar -->
  <div class="codrops-top">
    <div class="clr"></div>
  </div>
    <div id="container_demo"> 
   
      <a class="hiddenanchor" id="toregister"></a> <a class="hiddenanchor" id="tologin"></a>
      <div id="wrapper">
        <div id="login" class="animate form">
          <form action="addcoordinatesToDataBase.php" autocomplete="on" method="post">
            <h1>Add Coordinates</h1>
            <p>
              <label for="longitude" class="longitude">Longitude</label><br> 
              <input type="text" onkeypress="return isNumberKey(event)" name="longitude" placeholder="Longitude" required ="" />
            </p>
            <p>
              <label for="latitude" class="latitude" > Latitude </label><br>  
			  <input type="text" onkeypress="return isNumberKey(event)" name="latitude" placeholder="Latitude" required ="" /><br>
            </p>
           <p>
              <label for="help" class="help">Type of Help(MaxLength 30)</label><br>
			 <input type="text"  name="type_of_help" placeholder="Type Of Help" maxlength="30" required ="" /> 
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