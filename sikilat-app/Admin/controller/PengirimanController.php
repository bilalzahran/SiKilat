<?php
	include_once('model/PengirimanModel.php');	
	class PengirimanController{
		public function getData(){ 	
 			$pengirimanmodel = new PengirimanModel();		
 			return $pengirimanmodel->getData();
 		}
 		public function konfirmasiPengiriman(){
 			
 		}
 	}	
?>