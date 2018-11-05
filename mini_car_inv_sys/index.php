<?php require_once('Database.php');
$conn = new Database();
$query = "SELECT tm.id,tm.model_name,manu.manu_name,tm.qty 
FROM `tbl_model` tm
JOIN tbl_manufacturer manu on (manu.manu_id = tm.manu_id);";
$result = $conn->runQuery($query);
$data = array();
$count = 0;

if($result->num_rows > 0){
	while($row = $result->fetch_assoc()){
		$data['id'][$count++] = $row['id'];
		$data['model_name'][$count++] = $row['model_name'];
	}
}
echo "<pre>";print_r($data);echo "</pre>";
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
							<th>Edit</th>
						</tr>
					</thead>
					<tbody>
						<?php if($result->num_rows > 0){
								while($row = $result->fetch_assoc()){
									$count++;?>
									<tr>
										<td><?php echo $count;?></td>
										<td><?php echo $row['model_name'];?></td>
										<td><?php echo $row['manu_name'];?></td>
										<td><?php echo $row['qty'];?></td>
										<td><a href="add_model.php?pk=<?php echo $row['id'];?>"><input type="button" id="edit_btn" class="btn-info" value="Edit"></td>
									</tr>
							<?php	}
							}?>
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
						<div class="modal-body">
							<table class="table table-bordered table-striped" id="manuTBL">
								<tbody>
									<tr><td>Model Name :</td><td></td></tr>
									<tr><td>Manufacturer Name :</td><td></td></tr>
									<tr><td>Color :</td><td></td></tr>
									<tr><td>Count :</td><td></td></tr>
									<tr><td>Image1 :</td><td></td></tr>
								</tbody>
							</table>	
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#manuTBL tr').click(function(){
				$('#myModal').modal('show');
			});
		});
	</script>
</html>