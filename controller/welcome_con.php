<?php
	require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controller/db_con.php";
	require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/controller/autologout_con.php";

	if(!isset($_SESSION['user_login']))	//check unauthorize user not access in "welcome.php" page
	{
		header("location: login_con.php");
	}
	require_once $_SERVER['DOCUMENT_ROOT'] . "/kipa/views/welcome_view.php";
 ?>
