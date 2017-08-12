<?php include '../connect.php'; 

$output = '';
$video_id = '';
sleep(1);

$more_info = $con-> prepare("SELECT * FROM tbl_video WHERE video_id >" . $_POST['last_video_id'] . " LIMIT 5");
$more_info-> execute();
$Count = $more_info-> rowCount();

if($Count > 0) {

	$more = $more_info-> fetchAll();

	foreach($more as $new_More) {

		$video_id = $new_More['video_id'];
		$output .= '  
               <tbody>  
               <tr>  
                    <td>' . $new_More["video_title"] . '</td>  
               </tr></tbody>'; 

	}

	$output .= '  
               <tbody><tr id="remove_row">  
                    <td><button type="button" name="btn_more" data-vid="'. $video_id .'" id="btn_more" class="btn btn-success form-control">more</button></td>  
               </tr></tbody>  
     ';

     echo $output;

} else {

	echo "<div class='alert alert-danger text-center'>No Data More</div>";

}

?>