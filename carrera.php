<?php
$html = "";
if ($_POST["elegido"]==1) {
	$html = '
	<option value="1">Valparaíso</option>
	<option value="2">San Felipe</option>
	<';	
}
if ($_POST["elegido"]==2) {
	$html = '
	<option value="1">1</option>
	<option value="2">2</option>
	<option value="3">3</option>
	<option value="4">4</option>
	';	
}
if ($_POST["elegido"]==3) {
	$html = '
	<option value="1">2</option>
	<option value="2">2</option>
	<option value="3">2</option>
	';	
}
echo $html;	
?>