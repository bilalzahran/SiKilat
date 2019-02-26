<?php
	include_once('controller/PengirimanController.php');
	session_start();

	$controller = new PengirimanController();

	$data = $controller->getPengirimanByID($_SESSION['id']);

	include('views/template/header_start.php');
	include('views/template/header_end_dark.php');
	include('views/template/leftbar_dark.php');
	include('views/template/topbar.php');			
	include('views/v_status_pengiriman.php');
	include('views/template/footer_start.php');
	include('views/template/footer_end.php');				
 ?>