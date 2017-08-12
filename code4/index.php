<!DOCTYPE html>
<html>
<head>
	<title>login</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
    <style>
    	.my-input {
    		margin: 5px auto;
    		width: 400px;
    		margin-top: 100px;

    	}
    	#the_info {
    		width: 402px;
		    height: 100%;
		    background-color: #dadada;
		    margin-left: 369px;
		    margin-top: -5px;
		    border-radius: 5px;
		    color: #000;
		    word-wrap: break-word;
    	}
    	.loading {
    		width: 25px;
    		position: relative;
    		left: 550px;
    		display: none;
    	}
    </style>
</head>
<body>

<div class="container">
	<input type="search" id="the_Search" class="form-control my-input">
	<img src="../img/25.gif" class="loading">
	<div id="the_info"></div>
</div>

<script>

$(document).ready(function() {

	$(document).on('keydown', '#the_Search', function() {

		var value = $(this).val();
		$.ajax({

			url: 'search.php',
			method: 'POST',
			data: {value: value},
			beforeSend: function() {

				$('.loading').show();
				$('#the_info').hide();

			},
			success: function(data) {

				if(data != '') {

					$('.loading').hide();
					$('#the_info').show();
					$('#the_info').css('padding', '10px');
					$('#the_info').html('<p>'+ data +'</p>');
					if($('#the_Search').val().length === 0) {
						$('#the_info').hide();
					}
				}

			}

		});

	});

});

</script>
</body>
</html>