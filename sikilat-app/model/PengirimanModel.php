<?php 
	include 'connection/Connection.php';		
	class PengirimanModel extends Connection{						 
		private $conn;
		public function __construct(){
			$this->conn = $this->connect();
		}

		public function insert($data){			
			$kolom = implode(", ", array_keys($data));			
			$values = implode(", ",array_values($data));
			$sql = "INSERT INTO pengiriman ($kolom) VALUES (
			'".$data['no_resi']."',
			'".$data['id_pengirim']."',
			'".$data['nama_penerima']."',
			'".$data['alamat_penerima']."',
			'".$data['no_telp_penerima']."',
			'".$data['kecamatan']."',
			'".$data['kota']."',
			'".$data['provinsi']."',
			'".$data['kodepos']."',
			'".$data['jenis_pengiriman']."',
			'".$data['tanggal_pengiriman']."',
			'".$data['status_pengiriman']."'
			)";				
			echo $sql;
			mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));		
			header("location:StatusPengiriman.php");			
		}
		public function getLastId(){
			$sql = "SELECT id FROM pengiriman ORDER BY id LIMIT 1";
			$result = mysqli_query($this->conn, $sql);
			$data = mysqli_fetch_array($result);
			return $data;
		}

		public function getDataByID($id){
			$sql = "SELECT * FROM pengiriman WHERE id_pengirim='$id'";
			$result = mysqli_query($this->conn, $sql);			
			return $result;
		}
	}
 ?>