var alphanumerReg = /^[0-9a-zA-Z]+$/;
var alphabetsReg = /^[a-zA-Z ]*$/;
var onlynumericReg = /[^0-9 ]/;

function validate_manuform(){
	$('.errClass').hide();	
	var manu_name = $('#manu_name').val();
	if(manu_name.trim()==''){
		$('#manu_name').focus();
		$('#manu_name_err').show();
		$('#manu_name_err').text('Please fill manufacturer name');
	}else if(alphabetsReg.test(manu_name)==false){
		$('#manu_name').focus();
		$('#manu_name_err').show();
		$('#manu_name_err').text('only alphabets are allowed');
	}else{
		$.ajax({
			type: 'POST',
			url: 'http://localhost:8082/mini_car_inv_sys/Manufacturer.php',
			data: {'manu_name':manu_name},
			success: function(responce){
				window.location = "http://localhost:8082/mini_car_inv_sys/index.php";
			}
		});
	}
}

$(document).ready(function(e){
    $("#addmodel").on('submit', function(e){
        e.preventDefault();
		$('.errClass').hide();	
        var manu_dd = $('#manu_dd').val();
		var model_name = $('#model_name').val();
		var color = $('#color').val();
		var manu_year = $('#manu_year').val();
		var reg_no = $('#reg_no').val();
		var image1 = $('#image1').val();
				
		if(model_name.trim()==''){
			$('#model_name').focus();
			$('#model_name_err').show();
			$('#model_name_err').text('Please fill model name');
		}else if(alphanumerReg.test(model_name)==false){
			$('#model_name').focus();
			$('#model_name_err').show();
			$('#model_name_err').text('only numbers and alphabets are allowed');
		}else if(manu_dd=='select'){
			$('#manu_dd').focus();
			$('#manu_dd_err').show();
			$('#manu_dd_err').text('Please select manufacturer');
		}else if(color.trim()==''){
			$('#color').focus();
			$('#color_err').show();
			$('#color_err').text('Please fill model color');
		}else if(alphabetsReg.test(color)==false){
			$('#color').focus();
			$('#color_err').show();
			$('#color_err').text('only alphabets are allowed');
		}else if(reg_no.trim()==''){
			$('#reg_no').focus();
			$('#reg_no_err').show();
			$('#reg_no_err').text('Please fill model registration no');
		}else if(alphanumerReg.test(reg_no)==false){
			$('#reg_no').focus();
			$('#reg_no_err').show();
			$('#reg_no_err').text('only numbers and alphabets are allowed');
		}else{
		
			$.ajax({
				type: 'POST',
				url: 'http://localhost:8082/mini_car_inv_sys/Model.php',
				data: new FormData(this),
				contentType: false,
				cache: false,
				processData:false,
				success: function(responce){
					window.location = "http://localhost:8082/mini_car_inv_sys/index.php";
				}
			});
		}	
    });	
});	