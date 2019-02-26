<?php 
	include_once('model/BarangModel.php');
	class BarangController{
		public function insertBarang($data){
			$model = new BarangModel();
			$model->insertBarang($data);
		}
	}
 ?>