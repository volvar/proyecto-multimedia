<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>FORM INGRESO ALUMNOS</title>
  <link rel="stylesheet" href="css/bootstrap.css">
<style>
	body{ 
     padding-top:60px; 
    } 
</style>
</head>
<body>
	<?php include 'menu_direc.php' ?>	
<!-- FORMULARIO -->
  <div class="container">
    <div class="row col-md-8">
      <h2>Ingresar Datos</h2>
    </div>
  </div>
    <div class="container ">
      <form action="#" method="POST" enctype="#/form-data"/>
        <!-- NOMBRE Y RUT -->
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="nombre">Nombres</label>
            <input type="nombre" class="form-control" id="nombre" placeholder="Nombre">
          </div>
          <div class="form-group col-md-4">
            <label for="nombre">Apellido Paterno</label>
            <input type="nombre" class="form-control" id="nombre" placeholder="Apellido Paterno">
          </div>
          <div class="form-group col-md-4">
            <label for="nombre">Apellido Materno</label>
            <input type="nombre" class="form-control" id="nombre" placeholder="Apellido Materno">
          </div>
          <div class="form-group col-md-3">
            <label for="rut">Rut</label>
            <input type="rut" class="form-control" id="rut" placeholder="Rut">
          </div>
          <div class="form-group col-md-1">
            <label for="dv">DV</label>
            <input type="dv" class="form-control" id="dv" placeholder="dv">
          </div>
           <div class="form-group col-md-2">
            <label for="contacto">Numero de contacto</label>
            <input type="contacto" class="form-control" id="contacto" placeholder="Telefono/Celular">
          </div>
        </div>
    
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="correo">Correo Institucional</label>
            <input type="correo" class="form-control" id="correo" placeholder="correo">
          </div>
          <div class="form-group col-md-6">
            <label for="correo">Correo Personal</label>
            <input type="correo" class="form-control" id="correo" placeholder="correo">
          </div>
        
        </div>
        <div class="form-group-row">
          <label for="tipoEstudante"></label>
          <div class="custom-control custom-radio">
        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
        <label class="custom-control-label" for="customRadio1">Estudiante</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
        <label class="custom-control-label" for="customRadio2">Tesistas</label>
      </div>
      </div>
         <a href="Ingresar alumno foto.php" class="btn btn-primary" role="button">Ingresar</a>
       
      </form> 


    </div>
</body>
</html>


