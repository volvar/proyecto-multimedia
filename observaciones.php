<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Observaciones_general</title>
	<style>
	body{ 
     padding-top:100px; 
    } 
</style>
</head>
<body>
	<div class="container">
		<?php include 'menu alumnos.php'; ?>
		<?php
			date_default_timezone_set('America/Santiago');
			$fecha = date('d-m-Y');
		?>

			<form action="ingresar_observacion.php" method="POST" enctype="multipart/form-data" />
			<label>Fecha: <input type="datetime" name="fecha" id="fecha" disabled value="<?= $fecha?>"></label>
				<div class="form-group ">
				    <label for="observacion">Observacion</label>
				    <input input type="text" maxlength="30" class="form-control" id="observacion" placeholder="Observacion" name="observacion">
				
	            	<label for="laboratorio">Laboratorio</label>
	            		<select class="form-control" id="num_lab" name="num_lab">
			              <option value="103">103</option>
			              <option value="105">105</option>
	            		</select>
	         	</div>
				<input type="submit" class="btn btn-primary" value="Enviar">
			</form> 
	</div>
</body>
</html>