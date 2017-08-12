<?php 

	include '../connect.php';

	if(!empty($_POST)) {

		$output = '';
		$message = '';

		$name = $_POST['name'];
		$address = $_POST['address'];
		$gender = $_POST['gender'];
		$designation = $_POST['designation'];
		$age = $_POST['age'];

		if($_POST['employee_id'] != '') {

			$query = $con-> prepare("UPDATE tbl_employee SET name = ?, address = ?, gender = ?, designation = ?, age = ? WHERE id = {$_POST['employee_id']}");
			$query-> execute(array($name, $address, $gender, $designation, $age));

			$message = 'Data Updated';

		} else {

			$query = $con-> prepare("INSERT INTO tbl_employee (name, address, gender, designation, age) VALUES (:name, :address, :gender, :designation, :age)");
			$query-> execute(array(

				'name' => $name,
				'address' => $address,
				'gender' => $gender,
				'designation' => $designation,
				'age' => $age

			));

			$message = 'Data Inserted';

		}

			if($query) {

				$output .= '<label class="text-success">' . $message . '</label>';
				$infoStmt = $con-> prepare("SELECT * FROM tbl_employee ORDER BY id DESC");
				$infoStmt-> execute();
				$theinfo = $infoStmt-> fetchAll();

				$output .= '<table class="table table-bordered">  
		                     <tr>  
		                          <th width="70%">Employee Name</th>  
		                          <th width="15%">Edit</th>  
		                          <th width="15%">View</th>  
		                     </tr> ';

		        foreach($theinfo as $result) {

		        	$output .= '<tr>  
		                          <td>' . $result["name"] . '</td>  
		                          <td><input type="button" name="edit" value="Edit" id="'.$result["id"] .'" class="btn btn-info btn-xs edit_data" /></td>  
		                          <td><input type="button" name="view" value="view" id="' . $result["id"] . '" class="btn btn-info btn-xs view_data" /></td>  
		                     	</tr>  ';

		        }

		        $output .= '</table>';

				echo $output;

			}

	}

?>