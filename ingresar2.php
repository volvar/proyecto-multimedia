<?php 
include 'conexion.php';
	$cont=0;
	$cont2=0;	
	$nombre = $_POST['nombre'];
	$apell_pat = $_POST['apell_pat'];
	$apell_mat = $_POST['apell_mat'];
	$rut = $_POST['rut'];
	$dv = $_POST['dv'];
	$contacto = $_POST['contacto'];
	$correo = $_POST['correo'];
	$correo2 = $_POST['correo2'];
	$tipo = $_POST['customRadio'];
	$foto = $_POST['foto'];
	$rutf = $rut."-".$dv;

	$sql = "INSERT INTO persona (rut, nombres, apell_pat, apell_mat, correo, correo2, telefono, tipo_usario, foto) VALUES ('$rutf', '$nombre', '$apell_pat', '$apell_mat', '$correo', '$correo2', '$contacto', '$tipo', '$foto')";



	
	$sql5 = "SELECT rut FROM persona";
	$sql6 = "SELECT id_usuario FROM usuario";

	foreach ($pdo->query($sql5) as $row) {
	if ($row['rut'] == $rutf) {
		$cont++;
		}
	foreach ($pdo->query($sql6) as $row2) {
	if ($row['id_usuario'] == $row2['id_usuario']) {
		$cont2++;
		$id_usuario=$row2['id_usuario'];
		}
	}	
	}
	$sql3 = "INSERT INTO usuario(usuario, contraseña , rut) VALUES ('$rutf', '$rutf', '$rutf')";
	if ($cont>0) {
		echo "no se puede insertar";
	}
	else if ($cont == 0) {
		if ($cont2 == 0) {
			$consulta=$pdo->prepare($sql);
			$insertar=$consulta->execute();
			$consulta2=$pdo->prepare($sql3);
			$insertar=$consulta2->execute();
			echo "datos insertados";
		}
		else{
			echo "no se puede insertar";
		}
	}
		

 ?>