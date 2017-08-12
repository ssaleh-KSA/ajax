<?php 

	include '../connect.php';

	if($_POST['employee_id']) {

		$update_data_Stmt = $con-> prepare("SELECT * FROM tbl_employee WHERE id = {$_POST['employee_id']}");
		$update_data_Stmt-> execute();
		$Count = $update_data_Stmt-> rowCount();

		$fetch = $update_data_Stmt-> fetch();

		echo json_encode($fetch);

	}

?>