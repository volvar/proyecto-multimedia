<?php 
include 'conexion.php';
	$lab = $_POST['lab'];
	$card = $_POST['card'];
	$visita = $_POST['visita'];
    $hora = date("H:i:s");
    $fecha = date("Y-m-d");
    $rut = "";
echo "asdasd";

	$sql1 = "SELECT * FROM persona WHERE tarjeta = '".$card."'";

foreach ($pdo->query($sql1) as $row) {
	if ($row['tarjeta'] == $card) {
		$rut = $row['rut'];
		}
    }
    if ($visita == "entrada") {
    	$sql2 = "INSERT INTO visita(fecha, rut, num_lab, hora_entra) VALUES('$fecha', '$rut', '$lab', '$hora')";
    	$consulta=$pdo->prepare($sql2);
		$insertar=$consulta->execute();
    }
    elseif ($visita == "entrada") {
    	$sql3 = "INSERT INTO visita(fecha, rut, num_lab, hora_sali) VALUES('$fecha', '$rut', '$lab', '$hora')";
    	$consulta2=$pdo->prepare($sql3);
		$insertar2=$consulta2->execute();
    }

 ?>