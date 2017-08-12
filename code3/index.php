<!DOCTYPE html>
<html>
<head>
	<title>Select Box</title>
	<style>
		#selectOption {
			width: 30%;
    		margin: auto;
    		margin-top: 50px;
		}
		.loading {
			position: relative;
    		left: 535px;
    		top: 50px;
    		display: none;
		}
		#info {
			width: 800px;
		    margin: auto;
		    margin-top: 50px;

		}
		#info .selectBox-alert {
			width: 500px;
		}
	</style>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</head>
<body>
	<div class="container">
		<select id="selectOption" class="form-control">
			<option value="0">...</option>
			<option value="users">users</option>
			<option value="tbl_video">tbl_video</option>
		</select>
		<img src="../img/25.gif" class="loading">
		<div id="info">

		</div>
	</div>
	<script>
		
	$(document).ready(function() {

		$(document).on('change', '#selectOption', function() {

			$('#info').hide();
			var selectValue = $('#selectOption').val();
			$('.loading').show();
			$.ajax({

				url: 'get_info.php',
				method: 'POST',
				data: {selectValue: selectValue},
				success: function(data) {

					$('.loading').hide();
					$('#info').html(data);
					$('#info').show();

				}

			});

		});

	});

	</script>
</body>
</html>