<?php 

	include '../connect.php';
	sleep(2);
	$value = $_POST['selectValue'];

	if($value == '0') {

		echo "<div class='selectBox-alert alert alert-warning container'>رجاءً قم بالأختيار</div>";

	} else {

		$get_info = $con-> prepare("SELECT * FROM $value");
		$get_info-> execute();
		$Count = $get_info-> rowCount();

		if($Count > 0) {

			$The_info = $get_info-> fetchAll();

			$info1 = '';
			$info2 = '';

			if($value == 'users') {

				$info1 = 'id';
				$info2 = 'username';

			} else {

				$info1 = 'video_id';
				$info2 = 'video_title';

			}

			?>

			<div class="table-responsive">
				<table class="table">
					<tr>
						<td><?php echo $info1; ?></td>
						<td><?php echo $info2; ?></td>
					</tr>

			<?php

			foreach($The_info as $info) {

				echo '<tr>';
					echo '<td>' . $info[$info1] . '</td>';
					echo '<td>' . $info[$info2] . '</td>';
				echo '</tr>';

			}

			echo '</table>';
			echo '</div>';

		}

	}

?>