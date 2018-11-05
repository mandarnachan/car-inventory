<?php
require('Database.php');
class Model extends Database{
	
	public function insertData($model_name,$manu_dd,$color,$manu_year,$reg_no,$note,$image1,$image2){
		move_uploaded_file($image1['tmp_name'],'uploads/'.$image1['name']);
		move_uploaded_file($image2['tmp_name'],'uploads/'.$image2['name']);
		
		$inertQ = "INSERT INTO `tbl_model`(`manu_id`, `model_name`, `qty`, `color`, `manu_year`, `reg_no`, `note`, `image_path_1`, `image_path_2`) 
					VALUES ('".$manu_dd."','".$model_name."','','".$color."','".$manu_year."','".$reg_no."','".$note."','uploads/'".$image1['name']."','uploads/'".$image2['name']."')";		
		$this->runQuery($inertQ);			
	}
	
	public function  updateData(){
		$updatQ = "";
	}
	
	public function uploadFiles(){
		
	}
}

$conn = new Model();
if(isset($_POST)){
	$model_name = $conn->clearText($_POST['model_name']);
	$manu_dd = $_POST['manu_dd'];
	$color = $conn->clearText($_POST['color']);
	$manu_year = $conn->clearText($_POST['manu_year']);
	$reg_no = $conn->clearText($_POST['reg_no']);
	$note = $conn->clearText($_POST['note']);
	if(isset($_FILES)){
		$image1 = $_FILES['image1'];
		$image2 = $_FILES['image2'];
	}	
	
	$conn->insertData($model_name,$manu_dd,$color,$manu_year,$reg_no,$note,$image1,$image2);	
}
?>