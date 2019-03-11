<?php 
	include 'conexion.php';
	$rut = $_REQUEST['rut'];
	$card = $_REQUEST['card'];
	$sql2 = "UPDATE persona SET tarjeta = '".$card."' WHERE rut = '".$rut."'";
	include 'menu_direc.php';
			$consulta2=$pdo->prepare($sql2);
			$insertar=$consulta2->execute();
			if ($insertar == TRUE) {
				
				echo "profesor activado";
				}
			else{
				echo "error al insertar";
			}
			

 ?>