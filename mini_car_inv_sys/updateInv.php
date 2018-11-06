<?php
require('Database.php');
$db = new Database();

$query = "update tbl_model set deleted=1 
			WHERE deleted=0 and id='".$_POST['id']."' ";
$result = $db->runQuery($query);
$data = array();
if($result==true){
	echo 1;
}else{
	echo 0;
}
?>