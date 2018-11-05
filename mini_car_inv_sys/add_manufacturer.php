<!DOCTYPE html>
<html lang="en">
	<head>
		<title>ADD MANUFACTURER</title>
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
			<form id="addmanu" name="addmanu" method="GET">
				<div class="row"><h1>ADD MANUFACTURER</h1></div>
				<div class="row" style="height:30px;"></div>
				<div class="row">
					<div class="col-md-3"></div>
					<div class="col-md-1"><label>Name<b style="color:red;">*</b> :</label></div>
					<div class="col-md-3"><input type="text" class="form-control" id="manu_name" name="manu_name" /></div>
					<div class="col-md-2">
						<input type="button" class="btn-primary" id="btn_submit" value="Submit" onclick="javascript:validate_manuform();">
						<input type="reset" class="btn-default" value="Reset">
					</div>
				</div>
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-3 errClass" id="manu_name_err"></div>
				</div>
			</form>
		</div>
	</body>
</html>