<?php 
	class PageController{
		protected function dashboard(){
			include('views/template/header_start.php');
			include('views/template/header_end_dark.php');
			include('views/template/leftbar_dark.php');
			include('views/template/topbar.php');
			include('views/v_dashboard.php');
			include('views/template/footer_start.php');
			include('views/template/footer_end.php');	
		}
	}

 ?>