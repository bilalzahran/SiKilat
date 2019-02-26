<?php 
	class Home{
		public function get(){
			include('views/v_home.php');
		}
	}

	$page = new Home();
	$page->get();
 ?>