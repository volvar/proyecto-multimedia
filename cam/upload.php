<?php 
	
	$croppedImage = $_FILES['croppedImage'];
	$to_be_upload = $croppedImage['tmp_name'];
	$fotoname = $_GET['name'];
	$fotoname = substr($fotoname, 4);
	$new_file = "crops/".$fotoname;	
	
move_uploaded_file($to_be_upload, $new_file);
 ?>
 
