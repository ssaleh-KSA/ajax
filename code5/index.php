<?php 

	include '../connect.php';

	$fetchStmt = $con-> prepare("SELECT * FROM images ORDER BY id DESC");
	$fetchStmt-> execute();
	$Count = $fetchStmt-> rowCount();

	if($Count > 0) {

		$fetchData = $fetchStmt-> fetchAll();

	}

?>
<!DOCTYPE html>  
<html>  
 <head>  
  <title>Add Images</title>  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
 </head>  
 <body>  
  <br /><br />  
  <div class="container" style="width:900px;">  
   <h3 align="center">Ajax Image Insert Update Delete in Mysql Database using PHP</h3>  
   <br />
   <div align="right">
    <button type="button" name="add" id="add" class="btn btn-success">Add</button>
   </div>
   <br />
   <div id="image_data">
   	<table class="table table-bordered table-striped">
		<tr>
			<th width="10%">ID</th>
			<th width="70%">Image</th>
			<th width="10%">Change</th>
			<th width="10%">Remove</th>
		</tr>
		<?php 
			foreach($fetchData as $data) {

						echo '<tr>';
							echo '<td>' . $data['id'] . '</td>';
							echo '<td>';
								echo '<img src="../img/'. $data['image'] . '" height="60" widtd="75" class="img-tdumbnail" />';
							echo '</td>';
							echo '<td><button type="button" name="update" class="btn btn-warning bt-xs update" id="'. $data['id'] .'">Change</button></td>';
							echo '<td><button type="button" name="update" class="btn btn-danger bt-xs delete" id="'. $data['id'] .'">Remove</button></td>';
						echo '</tr>';
			}
		?>		
	</table>
   </div>
  </div>  
 </body>  
</html>

<div id="imageModal" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Add Image</h4>
			</div>
			<div class="modal-body">
				<form id="image_form" enctype="multipart/form-data">
				 <p><label>Select Image</label>
				 <input type="file" name="files[]" id="image" /></p><br />
				 <input type="hidden" name="action" id="action" value="insert" />
				 <input type="hidden" name="image_id" id="image_id" />
				 <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />
				  
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>

<script>
	
$(document).ready(function() {

	$(document).on('click', '#add', function() {

		$('#imageModal').modal('show');
		$('#image_form')[0].reset();

	});

	$(document).on('submit', function(e) {

			e.preventDefault();

			var image_name = $('#image').val();

			if(image_name == '') {

				alert('Image is required');
				return false;

			} else {

					$.ajax({
					     url:"action.php",
					     method:"POST",
					     dataType: new formData('#image_form'),
					     contentType: false,
					     processData: false,
					     success:function(data) {
					      alert(data);
					      $('#image_form')[0].reset();
					      $('#imageModal').modal('hide');
					     }

					});

				}

		});

});

</script>