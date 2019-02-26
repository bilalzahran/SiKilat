<?php
	include_once("../connection/Connection.php");
	class PengirimanModel extends Connection{
		private $conn;
		public funtion__contruct(){
			$this->conn = $this->connect();
		}
		public function getData(){
			$sql = "SELECT nama_pengirim, alamat, alamat_penerima, status_pengiriman FROM pengirim JOIN pengiriman with id";
			$result = mysql_query($this->conn);
			return $result;
			
			#konek data base
		}
	}
?>

