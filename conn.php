<?php 

require "class.php";

//create connection
$conn = mysqli_connect($servidor, $usuario, $contrasena, $basededatos);

/* comprobar la conexión */
if (mysqli_connect_errno()) {
    printf("Falló la conexión: %s", mysqli_connect_error());
    exit();
}

?>