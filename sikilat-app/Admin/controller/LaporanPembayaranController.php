<?php
	include_once('model/LaporanPembayaranModel.php');	
	
	class LaporanPembayaranController{
 		public function getData(){ 	
 			$LaporanPembayaranmodel = new LaporanPembayaranModel();		
 			return $LaporanPembayaranmodel->getData();
 		}
 		
	}	
?>