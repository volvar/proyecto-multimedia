<?php 
include "conexion.php";

$user = ["usuario"];
$pass = ["clave"];
$id_user = "";

$sql = "SELECT * FROM login";

$query = $pdo->prepare($sql);
      $query->execute();

     for($i=0; $row = $query->fetch(); $i++){
        if ($user == $row["nombre"]) {
        	if ($pass == $row["clave"]) {
        		$id_user = $row["id_login"];
        	}
        	else{
        		echo "error en clave";
        	}
        }
        else{
        	echo "error en usuario";
        }
      }

      if ($id_user != "") {
      	header("mostrar_alumno.php");
      }

      if ($id_user == "") {
      	echo "error";
      }
 ?>