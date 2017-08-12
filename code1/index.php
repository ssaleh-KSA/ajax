<?php include '../connect.php'; ?>
<?php 

	$info = $con-> prepare("SELECT * FROM tbl_video LIMIT 2");
	$info-> execute();
	$Count = $info-> rowCount();

	$video_id = '';

?>
<!DOCTYPE html>
<html>
<head>
	<title>Load More Data Using AJAX jQUery With PHP and MYSQL</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
</head>
<body>
	<div class="container">
		<div class="table-responsive">
			<h2 align="center">Load More Data using Ajax Jquery</h2>
			<table class="table table-bordered" id="load_data_table">
				<?php 

					if($Count > 0) {

						$tbl_info = $info->fetchAll();

						foreach($tbl_info as $in) {

							echo "<tr>";
							echo "<td>" . $in['video_title'] . "</td>";
							echo "</tr>";
							$video_id = $in['video_id'];

						}

						?>
						<tr id="remove_row">
							<td><button name="btn_more" id="btn_more" data-vid="<?php echo $video_id ?>" class="btn btn-success form-control">more</button></td>
						</tr>
<?php
					}
				?>
			</table>
		</div>
	</div>
	<script>

		$(document).ready(function() {

			$(document).on('click', '#btn_more', function () {

				var last_video_id = $(this).data("vid");
				$('#btn_more').html("Loading...");
				$.ajax({

					url: 'load_data.php',
					method: 'POST',
					data:{last_video_id: last_video_id},
					dataType: 'text',
					success: function(data) {

						if(data != '') {

							$('#remove_row').remove();
							$('#load_data_table').append(data);


						}

					}

				});

			});

		});

	</script>
</body>
</html>