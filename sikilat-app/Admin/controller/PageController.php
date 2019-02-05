<?php 
	class PageController{
		public function dashboard(){
			include('views/template/header_start.php');
			include('views/template/header_end_dark.php');
			include('views/template/leftbar_dark.php');
			include('views/template/topbar.php');
			include('views/v_dashboard.php');
			include('views/template/footer_start.php');
			include('views/template/footer_end.php');	
		}
		public function Pengiriman(){
			include('views/template/header_start.php');
			include('views/template/header_end_dark.php');
			include('views/template/leftbar_dark.php');
			include('views/template/topbar.php');
			include('views/v_pengiriman.php');
			include('views/template/footer_start.php');
			include('views/template/footer_end.php');	
		}
	}

 ?>