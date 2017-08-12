<?php 

	// if(isset($_POST['image_name'])) {

		include '../connect.php';

		if(is_array($_FILES)) {

			echo "yes";

		} else {

			echo "No";

		}

		// $new_Image_Extension = end(explode('.', $new_Image));

		// $Allowed_Extension = array('jpg', 'jpeg', 'png', 'bmp', 'tiff', 'gif');

		// if(!in_array($new_Image_Extension, $Allowed_Extension)) {

		// 	echo "This Image Extension Is Not Allowed, Add Image With This Extensions (jpg', 'jpeg', 'png', 'bmp', 'tiff', 'gif')";

		// } else {

		// }

	// }

?>