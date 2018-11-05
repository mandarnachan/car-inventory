<!DOCTYPE html>
<html lang="en">
	<head>
		<title>ADD MODEL</title>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
		<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
		<script src="js/jquery.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/validate.js"></script>
	  
	  
	  
	  <style>
		.errClass{
			color:red;
			display:none;
		}
	  </style>
	</head>
	<body>
		<?php require_once('menu.php');?>
		<div class="container" align="center">
			<form id="addmodel" name="addmodel" enctype="multipart/form-data">
				<div class="row"><h1>ADD MODEL</h1></div>
				<div class="row" style="height:30px;"></div>
				<div class="row">
					<div class="col-md-2"><label>Model Name<b style="color:red;">*</b> :</label></div>
					<div class="col-md-3"><input type="text" class="form-control" id="model_name" name="model_name" /></div>
					<div class="col-md-1"></div>
					<div class="col-md-2"><label>Manufacturer<b style="color:red;">*</b> :</label></div>
					<div class="col-md-3">
						<select class="form-control" id="manu_dd" name="manu_dd">
							<option value="select">Select</option>
							<option value="1">Maruti</option>
							<option value="2">Suzuki</option>
						</select>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-3 errClass" id="model_name_err"></div>
					<div class="col-md-6"></div>
					<div class="col-md-3 errClass" id="manu_dd_err"></div>
				</div>
				<div class="row" style="height:30px;"></div>
				<div class="row">
					<div class="col-md-2"><label>Color<b style="color:red;">*</b> :</label></div>
					<div class="col-md-3"><input type="text" class="form-control" id="color" name="color" /></div>
					<div class="col-md-1"></div>
					<div class="col-md-2"><label>Manufacturing year :</label></div>
					<div class="col-md-3">
						<input type="text" class="form-control" id="manu_year" name="manu_year" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-3 errClass" id="color_err"></div>
				</div>
				<div class="row" style="height:30px;"></div>
				<div class="row">
					<div class="col-md-2"><label>Registration No<b style="color:red;">*</b> :</label></div>
					<div class="col-md-3"><input type="text" class="form-control" id="reg_no" name="reg_no" /></div>
					<div class="col-md-1"></div>
					<div class="col-md-2"><label>Note :</label></div>
					<div class="col-md-3">
						<textarea class="form-control" id="note" name="note"></textarea>
					</div>
				</div>
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-3 errClass" id="reg_no_err"></div>
				</div>
				<div class="row" style="height:30px;"></div>
				<div class="row">
					<div class="col-md-2"><label>Image 1<b style="color:red;">*</b> :</label></div>
					<div class="col-md-3"><input type="file" class="form-control" id="image1" name="image1" /></div>
					<div class="col-md-1"></div>
					<div class="col-md-2"><label>Image 2 :</label></div>
					<div class="col-md-3">
						<input type="file" class="form-control" id="image2" name="image2" />
					</div>
				</div>
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-3 errClass" id="image1_err"></div>
				</div>
				<div class="row" style="height:30px;"></div>
				<div class="row">
					<div class="col-md-9"></div>
					<div class="col-md-3">
						<input type="submit" class="btn-primary" id="btn_submit" value="Submit" >
						<input type="reset" class="btn-default" value="Reset">
					</div>
				</div>	
			</form>
		</div>
	</body>
</html>