<?php 
	
	//include "conexion.php";

?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<link rel="stylesheet" href="css/bootstrap.css">
  <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
  <script src="https://code.jquery.com/jquery-3.2.1.js"></script>
  <script language="javascript">
  $(document).ready(function(){
      $("#campus").on('change', function () {
          $("#campus option:selected").each(function () {
              elegido=$(this).val();
              $.post("modelos.php", { elegido: elegido }, function(data){
                  $("#carrera").html(data);
              });     
          });
     });
  });
  </script>
</head>
<body>
<nav class="navbar navbar-expand-sm bg-dark navbar-dark fixed-top">

  <!-- Links -->

  
		<!-- dropdown -->
<div class="container">
    <div class="row col-md-8"><ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link" href="#">Link 1</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 2</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 3</a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="#">Link 4</a>
    </li>
  </ul></div>
    <div class="row col-md-4">
      <div class="dropdown">
        <button class="btn btn-primary dropdown-toggle" type="button" id="dropdown1" data-toggle="dropdown">
          Login
        </button>
        <div class="dropdown-menu">
            <form class="pr-4 pl-4" action="logalumno.php" method="POST">
            	<div class="form-group">
                 
                  <label for="usuario">Usuario:</label>
                  <input type="text" class="form-control" id="usuario" name="Usuario">
                </div> 
				<div class="form-group">
                  <label for="clave">Clave:</label>
                  <input type="password" class="form-control" id="clave" name="Clave">
                </div> 
                <button type="submit" class="btn btn-primary">Enviar</button></form>        
            </form>
        </div>
      </div>  
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script> 
		<!-- dropdown -->
  </div>
</nav> 

</body>
</html>