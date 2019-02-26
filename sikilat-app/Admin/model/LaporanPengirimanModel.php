<?php
	include_once("../connection/Connection.php");
	class LaporanPengirimanModel extends Connection {
			private $conn;
			public function __construct(){
				$this->conn = $this->connect();


			}

			public function getData(){
				$sql = " SELECT laporan_pengiriman.tanggal,admin.nama FROM laporan_pembayaran INNER JOIN admin
						ON laporan_pengiriman.id_admin = admin.id";
				$result = mysqli_query($this->conn, $sql) or die(mysqli_error($this->conn));
				return $result; //untuk ngmbil data dari databese

			}

	}
?>