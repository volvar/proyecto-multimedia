<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Validacion Form</title>
</head>
<body>
		<?php 
			if(isset($_GET['error'])) {
				$error = $_GET['error'];
				if ($error == 'faltan_valores') {
					echo '<strong style = "color:red"> Introduce todos los datos en todos los campos del formulario</strong>';
				}
				if ($error == 'nombre') {
					echo '<strong style = "color:red"> Introduce bien el nombre</strong>';
				}
				if ($error == 'apellidos') {
					echo '<strong style = "color:red"> Introduce bien el apellido</strong>';
				}
				if ($error == 'edad') {
					echo '<strong style = "color:red"> Introduce bien la edad</strong>';
				}
				if ($error == 'email') {
					echo '<strong style = "color:red"> Introduce bien el email</strong>';
				}
				if ($error == 'password') {
					echo '<strong style = "color:red"> Introduce bien la password</strong>';
				}
			}

		?>
		<form action="procesarformulario.php" method="POST">
			<label for="nombre">Nombre</label><br>
			<input type="text" name="nombre" required="required" pattern="[a-zA-Z]+" /><br>

			<label for="apellidos">Apellidos</label><br>
			<input type="text" name="apellidos" required="required" pattern="[a-zA-Z]+"/><br>

			<label for="edad">Edad</label><br>
			<input type="number" name="edad" required="required" pattern="[0-9]+"/><br>

			<label for="email">Email</label><br>
			<input type="email" name="email" required="required" /><br>

			<label for="pass">Contraseña</label><br>
			<input type="password" name="pass" required="required" minlength="5" /><br>

			<input type="submit" value="Enviar" />


		</form>


</body>
</html>