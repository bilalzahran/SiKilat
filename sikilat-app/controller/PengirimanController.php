<?php
	include_once('model/PengirimanModel.php');	
	class PengirimanController{
		
		public function generateRandomString() {
 			$length = 9;
 			return substr(str_shuffle(str_repeat($x='0123456789', ceil($length/strlen($x)) )),1,$length);
 		}
 		public function insert($data){
 			$pengirimanmodel = new PengirimanModel();
 			$pengirimanmodel->insert($data);
 		}
 		public function getPengirimanByID($id){ 	
 			$pengirimanmodel = new PengirimanModel();		
 			return $pengirimanmodel->getDataByID($id);
 		}
 		public function getLastId(){
 			$pengirimanmodel = new PengirimanModel();
 			$pengirimanmodel->getLastId();
 		}
	}	
?>