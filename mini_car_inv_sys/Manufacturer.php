<?php
require('Database.php');
class Manufacturer extends Database{
	
	public function insertData($manu_name){
		$inertQ = "INSERT INTO `tbl_manufacturer`(manu_name) 
					VALUES ('".$manu_name."')";		
		$this->runQuery($inertQ);			
	}
	
	public function  updateData(){
		$updatQ = "";
	}
	
	public function uploadFiles(){
		
	}
}

$conn = new Manufacturer();
if(isset($_POST)){
	$manu_name = $conn->clearText($_POST['manu_name']);
	$conn->insertData($manu_name);	
}
?>