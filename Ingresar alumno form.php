<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>FORM INGRESO PROTOTIPO</title>
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
      <form method="post">
        <!-- NOMBRE Y RUT -->
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="nombre">Nombre</label>
            <input type="nombre" class="form-control" id="nombre" placeholder="Nombre">
          </div>
          <div class="form-group col-md-3">
            <label for="rut">Rut</label>
            <input type="rut" class="form-control" id="rut" placeholder="Rut">
          </div>
          <div class="form-group col-md-1">
            <label for="dv">DV</label>
            <input type="dv" class="form-control" id="dv" placeholder="dv">
          </div>
        </div>
        <!-- CAMPUS Y CARRERA -->
        <div class="form-row">
          <div class="form-group col-md-3">
            <label for="campus">Campus</label>
            <select name="campus" id="campus" class="form-control">
              <option value="1">Valparaíso</option>
              <option value="2">San Felipe</option>
            </select>
          </div>
          <div class="form-group col-md-5">
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
        <!-- OTROS -->
        
        <div class="form-row">
          <div class="form-group col-md-8">
            <label for="correo">Correo</label>
            <input type="correo" class="form-control" id="correo" placeholder="correo">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-8">
            <label for="nombre"></label>
            <input type="#" class="form-control" id="#" placeholder="#">
          </div>
        </div>
        
        <div class="form-group">
          <label for="estatus">Estatus academico</label>
          <div class="form-check">
            <input class="form-check-input" type="checkbox" id="gridCheck">
            <label class="form-check-label" for="gridCheck">
              Estudiante 
            </label>

          </div>
        </div>
        <button type="submit" class="btn btn-primary">Ingresar</button>
      </form>  
    </div>

</body>
</html>


