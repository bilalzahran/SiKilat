<?php
	include_once('controller/PengirimanController.php');
	include_once('controller/BarangController.php');

	session_start();
	$controller = new PengirimanController();
	$barang = new BarangController();

	if($_SERVER["REQUEST_METHOD"] == "POST"){		
		$no_resi = $controller->generateRandomString();	
		$dataPengiriman = array(
			'no_resi' => $no_resi,
			'id_pengirim' => $_SESSION['id'],
			'nama_penerima' => $_POST['nama_penerima'],
			'alamat_penerima' => $_POST['alamat_penerima'],
			'no_telp_penerima' => $_POST['no_telp_penerima'],			
			'kecamatan' => $_POST['kecamatan'],
			'kota' => $_POST['kota'],			
			'provinsi' => $_POST['provinsi'],
			'kodepos' => $_POST['kode_pos'],
			'jenis_pengiriman' => $_POST['jenis_pengiriman'],
			'tanggal_pengiriman' => date("Y-m-d H:i:s"),
			'status_pengiriman' => "On Process"
		);
		$controller->insert($dataPengiriman);		

		$data = $controller->getLastId();
		$dataBarang = array(
			'nama_barang' => $_POST['nama_barang'], 
			'berat' => $_POST['berat'],
			'deskripsi' => $_POST['deskripsi'],
			'id_pengiriman' => $data['id']
		);		
		$barang->insertBarang($dataBarang);
	}

	include('views/template/header_start.php');
	include('views/template/header_end_dark.php');
	include('views/template/leftbar_dark.php');
	include('views/template/topbar.php');
	include('views/v_pengiriman.php');
	include('views/template/footer_start.php');
	include('views/template/footer_end.php');	
?>