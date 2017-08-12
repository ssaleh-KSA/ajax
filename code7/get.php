<?php 

	include '../connect.php';
	$select_id_1 = $_POST['select_1_value'];
	if(isset($select_id_1)) {

		if($select_id_1 == '0') {

			echo "No";

		} else {

			$fetchselect_2 = $con-> prepare("SELECT * FROM selects WHERE parent = {$select_id_1}");
			$fetchselect_2-> execute();
			$Count = $fetchselect_2-> rowCount();

			$select_2 = $fetchselect_2-> fetchAll();

			foreach($select_2 as $fetch_2) {

				echo "<option value='". $fetch_2['id'] ."'>". $fetch_2['title'] ."</option>";

			}

		}
	}

	$select_id_2 = $_POST['select_2_value'];

	if(isset($select_id_2)) {

		if($select_id_2 == '0') {

			echo "No";

		} else {

			$fetchselect_3 = $con-> prepare("SELECT * FROM selects WHERE parent = {$select_id_2}");
			$fetchselect_3-> execute();
			$Count = $fetchselect_3-> rowCount();

			$select_3 = $fetchselect_3-> fetchAll();

			foreach($select_3 as $fetch_3) {

				echo "<option value='". $fetch_3['id'] ."'>". $fetch_3['title'] ."</option>";

			}

		}

	}

?>