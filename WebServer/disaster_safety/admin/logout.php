<?php
	require_once("/includes/session.php");
	require_once("/includes/db_connect.php");
	require_once("/includes/functions.php");
	if(isset($_SESSION["username"])){
		unset($_SESSION["username"]);
		redirect_to("index.php");
	}else redirect_to("index.php");
?>