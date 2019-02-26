<?php
	include_once('controller/LoginController.php');
	
	$login = new LoginController();

	if($_SERVER["REQUEST_METHOD"] == "POST"){
		session_start();
		$login->login($_POST['username'],$_POST['password']);
	}
	include('views/template/header_account.php');
	include('views/v_login.php');		
 ?>