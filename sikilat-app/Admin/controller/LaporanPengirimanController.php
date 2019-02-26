<?php
	include_once('model/LaporanPengirimanModel.php');	
	
	class LaporanPengirimanController{
 		public function getData(){ 	
 			$LaporanPengirimanmodel = new LaporanPengirimanModel();		
 			return $LaporanPengirimanmodel->getData();
 		}
 		
	}	
?>