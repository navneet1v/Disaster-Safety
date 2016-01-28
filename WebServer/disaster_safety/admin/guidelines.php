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

<title>GUIDELINES</title>
   <link rel="stylesheet" type="text/css" href="stylesheets/demo.css">
   <link rel="stylesheet" type="text/css" href="stylesheets/style.css">
   <link rel="stylesheet" type="text/css" href="stylesheets/animate-custom.css">
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
          <form action="guidelinesToDataBase.php" autocomplete="on" method="post">
            <h1>Update Guidelines</h1>
			<p>
			    <label for="calamity" class="calamity">Calamity(Maxlength 30) </label><br>
				<input type="text" name="calamity" placeholder="Calamity" required="" maxlength=30 /><br>
			</p>
            <p>
              <label for="before" class="before" >Before Calamity </label><br>
			  <textarea rows="4" cols="60" type="text" name="before_cal" placeholder=" Before Calamity" required="" ></textarea>
            </p>
            <p>
			  <label for="during" class="during" >During Calamity </label><br>
			  <textarea rows="4" cols="60" type="text" name="during_cal" placeholder=" During Calamity" required="" ></textarea>
            </p>
           <p>
              <label for="after" class="after">After Calamity</label><br>
			  <textarea rows="4" cols="60" type="text" name="after_cal" placeholder=" After Calamity" required="" ></textarea>          
            </p>
            <p class="login button">
              <input type="submit" value="Update" >
            </p>
          </form>
		  <p><?php echo htmlentities($message); ?></p>
        </div>
      </div>
    </div>
</div>
</body>
</html>