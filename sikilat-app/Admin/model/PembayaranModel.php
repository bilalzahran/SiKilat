<?php
	include_once("../connection/Connection.php");
	class PembayaranModel extends Connection {
		private $conn;
		public  function __construct(){
			$this->conn = $this->connect();
		}

		public function getData(){
			$sql = "SELECT * FROM pembayaran";
			$result = mysqli_query($this->conn,$sql) or die (mysqli_error($this->conn));
			return $result;

			#connect ke database
		}
	}
?>