<?php
$html = "";
if ($_POST["elegido"]==1) {
	$html = '
	<option value="1">Ingeniería Informática</option>
	<option value="2">Ingeniería Ambiental</option>
	<option value="3">Ingeniería Civil Ambiental</option>
	<option value="4">Ingeniería Civil Industrial</option>
	<option value="5">Ingeniería en Estadística</option>
	';	
}
if ($_POST["elegido"]==2) {
	$html = '
	<option value="1">Ingeniería Informática</option>
	<option value="2">Educación Parvularia</option>
	<option value="3">Pedagogía en Castellano</option>
	<option value="4">Pedagogía en Educación Diferencial</option>
	<option value="4">Pedagogía en Historia y Geografía</option>
	<option value="4">Pedagogía en Inglés</option>

	';	
}

echo $html;	
?>