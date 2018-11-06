<?php require_once('Database.php');
$conn = new Database();
$query = "SELECT tmod.id,tmod.manu_id,manu.manu_name,tmod.model_name,COUNT(tmod.model_name) as 'count' 
FROM `tbl_model` tmod
JOIN tbl_manufacturer manu on (manu.manu_id = tmod.manu_id)
WHERE tmod.deleted=0 GROUP BY tmod.manu_id,tmod.model_name";
$result = $conn->runQuery($query);
$data = array();
$sr_no = 0;
if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		array_push($data,$row);
	}
}
//echo "<pre>";print_r($data);echo "</pre>";
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<title>CIMS</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/validate.js"></script>
	</head>
	<body>
		<?php require_once('menu.php');?>
		<div class="container" style="margin-top: 70px;">
			<div class="row">
				<a href="add_model.php"><input class="btn btn-info" type="button" id="addmodel_btn" name="addmodel_btn" value="Add Model" /></a>
			</div>
			<div class="row" style="height:20px;"></div>
			<div class="row">
				<table class="table table-bordered table-striped" id="manuTBL">
					<thead>
						<tr>
							<th>Sr.No</th>
							<th>Manufaturer Name</th>
							<th>Model Name</th>
							<th>Count</th>
							<!--th>Edit</th-->
						</tr>
					</thead>
					<tbody>
						<?php foreach($data as $key=>$value){ $sr_no++?>
							<tr>
								<td><?php echo  $sr_no;?></td>
								<td><?php echo  $value['manu_name'];?><input type="hidden" id="manu_id<?php echo $sr_no;?>" name="manu_id<?php echo $sr_no;?>" value="<?php echo $value['manu_id'];?>" /></td>
								<td><?php echo  $value['model_name'];?></td>
								<td><?php echo  $value['count'];?></td>
								<!--td><?php echo  '';?></td-->
							</tr>
						<?php }?>
					</tbody>
				</table>
			</div>	
			<div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog">
					<!-- Modal content-->
					<div class="modal-content">
						<div class="modal-header">
						  <button type="button" class="close" data-dismiss="modal">&times;</button>
						  <h4 class="modal-title">Modal Header</h4>
						</div>
						<div class="modal-body"></div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal" onclick="javascript:window.location='index.php';">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#manuTBL tr').click(function(){
				showModalData($(this).children('td:eq(2)').text(),$(this).index());
			});
		});
		
		function showModalData(model_name,trIndex){
			console.log('#manu_id'+(parseInt(trIndex)+1));
			$.ajax
			({
				type:"POST",
				url:"showModalData.php",	
				data : {
						'model_name':model_name,
						'manu_id' : $('#manu_id'+(parseInt(trIndex)+1)).val(),
						},
				success: function(data)
				{	
					if(data!=''){
						$('.modal-body').empty();
						var modalData = JSON.parse(data);
						var tbody= "";
						for(var i=0;i<modalData.length;i++){
							tbody += "<table class='table table-bordered table-striped' id='manuTBL'><tbody id='modalTbody'>"+
								"<tr><td>Model Name :</td><td>"+modalData[i].model_name+"</td></tr>"+
								"<tr><td>Manufacturer Name :</td><td>"+modalData[i].manu_name+"</td></tr>"+
								"<tr><td>Color :</td><td>"+modalData[i].color+"</td></tr>"+
								"<tr><td colspan='2'><input type='button' class='btn-info' value='Sold' onclick='javascript:updateInv(\""+modalData[i].id+"\",\""+modalData[i].model_name+"\",\""+trIndex+"\");'/></td></tr>"+
								"</tbody></table>";
						}
						$('.modal-body').append(tbody);	
						$('#myModal').modal('show');
					}
					
				},
				async: false
			});
		}
		
		function updateInv(id,modelName,trIn){
			$.ajax
			({
				type:"POST",
				url:"updateInv.php",	
				data : {
						'id':id,
						},
				success: function(data)
				{	
					if(data==1){
						showModalData(modelName,trIn)
					}else{
						alert("unable to update");
					}
				},
				async: false
			});
		}
	</script>
</html>
