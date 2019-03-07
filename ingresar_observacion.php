<?php
include 'conexion.php';
$observacion =  $_POST['observacion'];
$fecha = $_POST['fecha'];
$num_lab = $_POST['num_lab'];

$sql = "INSERT INTO observacion(observacion, fecha, num_lab) VALUES('$observacion', '$fecha', '$num_lab')";

if ($observacion == '') {
	echo "Por favor ingresar observación";
}
else{
	echo "Observación enviada";
}

?>