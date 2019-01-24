<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>dato  ALUMNO</title>
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
	<?php include 'verificar.php';
        include 'mostrar_persona.php';
  ?>	


<!-- FORMULARIO -->
  <div class="container ">
      <div class="media">
        <div class="media-body align-self-end">
          <h2 class="mt-0">muestra de dato </h2>
        </div>
        <img class= "img-thumbnail" height="200" width="200" src="foto.jpg" alt="foto">
</div>
  </div>
    <div class="container ">
      <form action="#" method="POST" enctype="#/form-data"/>
        <!-- NOMBRE Y RUT -->
        <div class="form-row">
          <div class="form-group col-md-4">
            <label for="$row['nombres']">Nombres</label>
            <th> </th>
          </div>
          <div class="form-group col-md-4">
            <label for="$row['apell_pat']">Apellido Paterno</label>
            <th> </th>
          </div>
          <div class="form-group col-md-4">
            <label for="$row['apell_mat']">Apellido Materno</label>
            <th></th>
          </div>
          <div class="form-group col-md-3">
            <label for="$row['rut']">Rut</label>
            <th></th>
          </div>
          
          <div class="form-group col-md-4">
            <label for="$row['correo_institucional']">Correo Institucional</label>
           <th></th>
          </div>
        
          <div class="form-group col-md-8">
            <label for="$row['correo_personal']">Correo Personal</label>
            <th></th>
          </div>


          <div class="form-group col-md-4">
            <label for="$row[' tipo_usario']">tipo de persona</label>
            <th></th>
          </div>
         
         <div class="form-group col-md-4">
            <label for="$row['telefono'] ">telefono</label>
            <th></th>
          </div>
        </div>
  </div>         
        <div class="form-group-row">
         
    </form> 
      <p> QR</p>


    </div>
</body>
</html>


