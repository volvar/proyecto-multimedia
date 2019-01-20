<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>INDEX ALUMNO</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <!-- scripts para la dependecia de los selec -->
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
<style>
	body{ 
     padding-top:60px; 
    } 
</style>
</head>
<body>
	<?php include 'menu alumnos.php' ?>	
<!-- FORMULARIO -->
  <div class="container ">
      <div class="media">
        <div class="media-body align-self-end">
          <h2 class="mt-0">Ingresar Datos</h2>
        </div>
        <img class= "img-thumbnail" height="200" width="200" src="foto.jpg" alt="foto">
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
          <div class="form-group col-md-8">
            <label for="correo">Correo</label>
            <input type="correo" class="form-control" id="correo" placeholder="correo">
          </div>
        </div>
    
        	<!-- CAMPUS Y CARRERA -->
        <div class="form-row">
          <div class="form-group col-md-2">
            <label for="contacto">Numero de contacto</label>
            <input type="contacto" class="form-control" id="contacto" placeholder="Telefono/Celular">
          </div>
          <div class="form-group col-md-3">
            <label for="campus">Campus</label>
            <select name="campus" id="campus" class="form-control">
              <option value="1">Valparaíso</option>
              <option value="2">San Felipe</option>
            </select>
          </div>
          <div class="form-group col-md-7">
            <label for="carrera">Carrera</label>
            <select name="carrera" id="carrera" class="form-control">
              <option value="1">Ingeniería Informática</option>
              <option value="2">Ingeniería Civil Ambiental</option>
              <option value="3">Ingeniería Civil Industrial</option>
              <option value="4">Ingeniería en Estadística</option>
              <option value="5">Ingeniería Ambiental</option>  
            </select>
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
    </form> 
      <p> QR</p>


    </div>
</body>
</html>

