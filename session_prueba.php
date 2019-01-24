<?php 
include 'conexion.php'
	
	$nombre = $_POST['nombre'];

	$rut = $_POST['rut'];


	
	session_start();
	$_SESSION["usuario"] = "$nombre";	
	$_SESSION["contraseña"] = "$rut";


// establecer tiempo de inactividad
	$inactividad =600;
	if (isset($_SESSION["timeout"])) {
		$sessionTTL = time() - $_SESSION["timeout"];
		if ($sessionTTL > $inactividad) {
			session_destroy();
			header("Location: /.php");
		}
	}

 ?>