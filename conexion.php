<?php

$user="root";
$pass="";
$db_name= "proyecto_multimedia";
$host = "localhost";

$db = mysqli_connect($host,$user,$pass,$db_name);

/* si falla la conecion */
if (mysqli_connect_errno()) {
	printf("fallo la conexion: %S",mysqli_connect_error());
	exit();
	
}


mysqli_close($db);



?>