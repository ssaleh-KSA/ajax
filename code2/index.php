<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</head>
<body>
<div class="container">
	<input type="text" id="username">
	<button id="button" class="btn btn-success">تحقق</button>
	<div id="info"></div>
	</div>
<script>

	$(document).ready(function() {

			$(document).on('click', '#button', function () {

				var username = $('#username').val();
				$('#button').html("Loading...");
				$.ajax({

					url: 'chack.php',
					method: 'POST',
					data: {username: username},
					success: function(cheack_info) {

						if(cheack_info != '') {

							$('#info').html(cheack_info);
							$('#button').html("تحقق");

						} else {

							alert('هناك خطأ');

						}

					}

				});

			});

		});

</script>
</body>
</html>