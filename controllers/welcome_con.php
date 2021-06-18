<?php
	require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/db_con.php";
	require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controllers/autologout_con.php";

	//session_start();

	if(!isset($_SESSION['user_login']))	//check unauthorize user not access in "welcome.php" page
	{
		header("location: login_con.php");
	}



	if(isset($_SESSION['user_login']))
	{
		$id = $_SESSION['user_login'];
		$welcomeData = $controller->welcome('userdetails', $id);
	}

	require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/welcome_view.php";

 ?>
