<?php 

include_once('controller/PembayaranController.php');
session_start ();

$controller = new PembayaranController();

$data = $controller->getData();

	include('views/template/header_start.php');
	include('views/template/header_end_dark.php');
	include('views/template/leftbar_dark.php');
	include('views/template/topbar.php');
	include('views/v_pembayaran.php');		
	include('views/template/footer_start.php');
	include('views/template/footer_end.php');	
 ?>