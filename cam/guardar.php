<?php 

$var1 = $_POST['url'];
// baseFromJavascript will be the javascript base64 string retrieved of some way (async or post submited)

 // $_POST['base64']; //your data in base64 'data:image/png....';
// We need to remove the "data:image/png;base64,"
$base_to_php = explode(',', $var1);
// the 2nd item in the base_to_php array contains the content of the image
$data = base64_decode($base_to_php[1]);
// here you can detect if type is png or jpg if you want
$filepath = "img/"; // or image.jpg
$name = uniqid();
$filepath = $filepath.$name.".png";

// Save the image in a defined path
file_put_contents($filepath,$data);
echo "<img src='".$filepath."'>";
 ?>
