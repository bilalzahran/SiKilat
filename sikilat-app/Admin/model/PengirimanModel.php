<?php
	include_once("../connection/Connection.php");
	class PengirimanModel extends Connection{
		private $conn;
		public function __construct(){
			$this->conn = $this->connect();
		}
		public function getData(){
			$sql = "SELECT pengiriman.id,pengirim.nama_pengirim, pengirim.alamat, pengiriman.alamat_penerima, pengiriman.status_pengiriman FROM pengirim JOIN pengiriman ON pengiriman.id_pengirim = pengirim.id" ;
			$result = mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
			return $result;
			
			#konek data base
		}
	}
?>

