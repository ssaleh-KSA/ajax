<?php 

	include '../connect.php';

	$fetchselect_1 = $con-> prepare("SELECT * FROM selects WHERE parent = 0");
	$fetchselect_1-> execute();
	$Count = $fetchselect_1-> rowCount();

?>

<html>  
  <head>  
       <title>Webslesson Tutorial | PHP Ajax Update MySQL Data Through Bootstrap Modal</title>  
       <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
       <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
       <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
       <style>
       		#div_1 {
       			margin-top: 50px;
       		}
       		#div_2 {
       			margin-top: 50px;
       		}
       		#div_3 {
       			margin-top: 50px;
       		}
       		#div_4 {
       			margin-top: 50px;
			    width: 100%;
			    height: 15%;
			    margin-bottom: 50px;
			    text-align: right;
			    padding: 20px;
			    background-color: antiquewhite;
       		}
       		.loading_1 {
       			position: relative;
       			left: 500px;
       			display: none;
       		}
       		.loading_2 {
       			position: relative;
       			left: 500px;
       			display: none;
       		}
       </style>
  </head>  
  <body>
	  <div class="container">
	  	<div id="div_1">
			<select id='select_1' class='form-control'>
				<option value="0">-اختر واحدة-</option>
				  <?php 

					  if($Count > 0) {

							$select_1 = $fetchselect_1-> fetchAll();

							foreach($select_1 as $fetch_1) {

								echo "<option value='". $fetch_1['id'] ."'>". $fetch_1['title'] ."</option>";

							}

						}

				  ?>

		  	</select>
	  	</div>
	  	<div id="div_2"><img src="../img/25.gif" class="loading_1"></div>
	  	<div id="div_3"><img src="../img/25.gif" class="loading_2"></div>
	  	<button id="ok_button" class="btn btn-success">OK</button>
	  </div>

	  <script>
	  	
	  	$(document).ready(function() {

	  		$(document).on('change', '#select_1', function() {

	  			$('#select_3').hide();
	  			$('#div_4').hide();
	  			var select_1_value = $(this).val();
	  			$('.loading_1').show();

	  			$.ajax({

	  				url: 'get.php',
	  				method: 'POST',
	  				data: {select_1_value: select_1_value},
	  				success: function(data) {

	  					$('.loading_1').hide();
	  					$('#div_2').html("<select id='select_2' class='form-control'><option value='0'>-اختر واحدة-</option>"+data+"</select>");

	  				}


	  			});

	  		});

	  		$(document).on('change', '#select_2', function() {

	  			var select_2_value = $(this).val();
	  			$('.loading_2').show();
	  			$('#div_4').hide();

	  			$.ajax({

	  				url: 'get.php',
	  				method: 'POST',
	  				data: {select_2_value: select_2_value},
	  				success: function(data) {

	  					$('.loading_2').hide();
	  					$('#div_3').html("<select id='select_3' class='form-control'><option value='0'>-اختر واحدة-</option>"+data+"</select>");

	  				}

	  			});

	  		});

	  		$(document).on('click', '#ok_button', function() {

	  			var continent = $('#select_1 option:selected').text();
	  			var Country = $('#select_2 option:selected').text();
	  			var City = $('#select_3 option:selected').text();
	  			$('#div_4').show();
	  			$('#div_4').html("القارة:" + continent + "<br>الدولة:" + Country + "<br>المدينة:" + City);

	  		});

	  	});

	  </script>
<div class="container">
	<div id="div_4"></div>
</div>
  </body>
  </html>