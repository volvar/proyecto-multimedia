<?php 
	$titulo = $_POST['titulo'];
	$fecha = $_POST['fecha'];
	$categoria = $_POST['categoria'];
	$resumen = $_POST['resumen'];
	$cuerpo = $_POST['cuerpo'];
	$img = $_POST['img'];

	if ($titulo == "") {
		$error.="El campo no puede quedar vacio</br>";
	}
	if ($resumen == "") {
		$error.="El campo no puede quedar vacio</br>";
	}
	if ($cuerpo == "") {
		$error.="El campo no puede quedar vacio</br>";
	}
	require_once "conn.php"

 ?>