<?php
require('Database.php');
$db = new Database();

$query = "SELECT tmod.id,tmod.manu_id,manu.manu_name,tmod.model_name,tmod.color
FROM `tbl_model` tmod
JOIN tbl_manufacturer manu on (manu.manu_id = tmod.manu_id)
WHERE tmod.deleted=0 and tmod.manu_id='".$_POST['manu_id']."' and tmod.model_name = '".$_POST['model_name']."' ";
$result = $db->runQuery($query);
$data = array();
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		array_push($data,$row);
	}
echo json_encode($data);	
}else{
	echo "";
}
?>