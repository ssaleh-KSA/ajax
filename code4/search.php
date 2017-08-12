<?php

include '../connect.php';
sleep(1);

$search = $_POST['value'];

$searchStmt = $con-> prepare("SELECT video_title FROM tbl_video WHERE video_title LIKE '%{$search}%';");
$searchStmt-> execute();
$Count = $searchStmt-> rowCount();

if($Count > 0) {

	$the_search = $searchStmt-> fetchAll();

	foreach($the_search as $the_Info) {

		echo "<a href='#'>" . $the_Info['video_title'] . "</a><br>";

	}

} else {

	echo "<p>لا يوجد بيانات</p>";

}


?>