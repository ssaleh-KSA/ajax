<?php

include '../connect.php';
sleep(1);
if(isset($_POST['username'])) {

	$username = $_POST['username'];

	$cheack_username = $con-> prepare("SELECT username FROM users WHERE username = ?");
	$cheack_username-> execute(array($username));
	$Count = $cheack_username-> rowCount();

	if(empty($username)) {

		echo "<div class='alert alert-warning container'>لا يمكنك ترك الحقل فارغً</div>";

	} elseif ($Count == 1) {

		echo "<div class='alert alert-danger container'>أسم المستخدم هذا مستخدم من قبل</div>";

	} elseif (strlen($username) < 6) {

		echo "<div class='alert alert-danger container'>!!!اسم المستخدم هذا قصير جداً يجب ان يكون أكبر من 6 حروف</div>";

	} elseif (strlen($username) > 30) {

		echo "<div class='alert alert-danger container'>!!!اسم المستخدم هذا كبير جداً يجب ان يكون أصغر من 30 حرف</div>";

	} else {

		echo "<div class='alert alert-success container'>أسم المستخدم هذا متاح</div>";

	}

} else {

	echo "No";

}

?>