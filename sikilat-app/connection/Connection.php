<?php 
	class Connection{
		public function connect(){
			$host = 'localhost';
			$user = 'root';
			$pass = '';
			$db = 'sikilat_db';
			$connection = mysqli_connect($host,$user,$pass,$db);			
			return $connection;
		}
	}	
 ?>