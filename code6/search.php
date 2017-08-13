<?php 

	include '../connect.php';

	$searchValue = $_POST['searchValue'];

	if(isset($searchValue)) {

		$searchStmt = $con-> prepare("SELECT * FROM tbl_employee WHERE name LIKE '%{$searchValue}%'");
		$searchStmt-> execute();
		$Count = $searchStmt-> rowCount();

		if($Count > 0) {

			$serach_Info = $searchStmt-> fetchAll();

			echo '<table class="table table-bordered">  
                   <tr>  
                        <th width="70%">Employee Name</th>  
                        <th width="15%">Edit</th>  
                        <th width="15%">View</th>  
                   </tr>';

			foreach($serach_Info as $search_Value) {

				echo '<tr>';
					echo '<td>' . $search_Value["name"] . '</td>';
					echo '<td><input type="button" name="edit" value="Edit" id=' . $search_Value["id"] . ' class="btn btn-info btn-xs edit_data" /></td>  ';
                    echo '<td><input type="button" name="view" value="view" id=' . $search_Value["id"] . ' class="btn btn-info btn-xs view_data" /></td>  ';
				echo '</tr>';

			}

			echo "</table>";

		} else {

			echo "<div class='alert alert-warning'>No Info</div>";

		}

	} else {

		echo "error";

	}

?>
