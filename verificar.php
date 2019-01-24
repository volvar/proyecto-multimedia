<?php 
	include 'conexion.php';

	$usuario = $_POST['Usuario'];
	$clave = $_POST['Clave'];

	$sql = "SELECT * FROM usuario U JOIN persona P ON U.id_usuario = P.id_usuario";

	$resultado = $pdo->query($sql);
	if ($resultado->fetch()>0) {
	while($registro = $resultado->fetch()) {
		if ($registro['usuario'] == $usuario) {
			if ($registro['clave'] == $clave) {
				if ($registro['tipo_usario'] == $usuario) {
					if ($registro['tipo_usario'] == 1) {
						header("HTTP/1.0 404 Not Found");
					}
					else{
						header("HTTP/1.0 404 Not Found");
					}
				}
				else{
					echo "usuario invalidado";
				}
			}
			else{
				echo "clave incorrecta";
			}
		}
		else{
			echo "usuario inexiste o incorrecto";
		}
		}
	}
	else{
		echo "no hay registros";
	}
 ?>