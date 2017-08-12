<?php 

	include '../connect.php';

	if(isset($_POST['employee_id'])) {

		$view_data_Stmt = $con-> prepare("SELECT * FROM tbl_employee WHERE id = {$_POST['employee_id']}");
		$view_data_Stmt-> execute();
		$Count = $view_data_Stmt-> rowCount();

		if($Count > 0) {

			$fetch = $view_data_Stmt-> fetchAll();

			echo '<div class="table-responsive">';
           	echo '<table class="table table-bordered">';

			foreach($fetch as $info) {

				echo '<tr>';
             	echo '<td width="30%"><label>Name</label></td>';
             	echo '<td width="70%">' . $info["name"] . '</td>';
             echo '</tr>';
             echo '<tr>';
             	echo '<td width="30%"><label>Address</label></td>';
             	echo '<td width="70%">' . $info["address"] . '</td>';
             echo '</tr>';
             echo '<tr>';
             	echo '<td width="30%"><label>Gender</label></td>';
             	echo '<td width="70%">' . $info["gender"] . '</td>';
             echo '</tr>';
             echo '<tr>';
             	echo '<td width="30%"><label>Designation</label></td>';
             	echo '<td width="70%">' . $info["designation"] . '</td>';
             echo '</tr>';
             echo '<tr>';
             	echo '<td width="30%"><label>Age</label></td>';
             	echo '<td width="70%">' . $info["age"] . ' Year</td>';
             echo '</tr>';

			}

			echo '</table>';
      		echo '</div>';

		} else {

			echo "error";

		}

	}

?>