<?php 
	include_once('connection/Connection.php');

	class BarangModel extends Connection{
		private $conn;
		public function __construct(){
			$this->conn = $this->connect();
		}
		public function insertBarang($data){
			$kolom = implode(", ", array_keys($data));
			$sql = "INSERT INTO barang ($kolom) VALUES (
			'".$data['nama_barang']."',
			'".$data['berat']."',
			'".$data['deskripsi']."',
			'".$data['id_pengiriman']."')";
			mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
			echo $sql;
		}
	}
 ?>