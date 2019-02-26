<?php
	include_once('model/PembayaranModel.php');	
	class PembayaranController{
 		public function getData(){ 	
 			$pembayaranmodel = new PembayaranModel();		
 			return $pembayaranmodel->getData();
 		}

 	}	
?>