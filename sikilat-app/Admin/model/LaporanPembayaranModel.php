<?php
	include_once("../connection/Connection.php");
	class LaporanPembayaranModel extends Connection {
			private $conn;
			public function __construct(){
				$this->conn = $this->connect();


			}

			public function getData(){
				$sql = " SELECT laporan_pembayaran.tanggal,admin.nama FROM laporan_pembayaran INNER JOIN admin
						ON laporan_pembayaran.id_admin = admin.id";
				$result = mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
				return $result; //untuk ngmbil data dari databese

			}

	}
?>