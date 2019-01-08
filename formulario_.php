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
  <!-- <menu>menu u otra cosa</menu> -->
  <div class="container">
    <div class="row col-md-8"></div>
    <div class="row col-md-4">
      <div class="dropdown">
        <button class="btn btn-default dropdown-toggle" type="button" id="dropdown1" data-toggle="dropdown">
          Login
        </button>
        <div class="dropdown-menu">
            <form class="pr-4 pl-4">
                <div class="form-group"> 
                  <label for="usuario">Usuario:</label>
                  <input type="text" class="form-control" id="usuario" name="Usuario">
                </div> 
                <div class="form-group"> 
                  <label for="clave">Clave:</label>
                  <input type="clave" class="form-control" id="clave" name="Clave">
                </div> 
                <button type="submit" class="btn btn-primary">Enviar</button>       
            </form>
        </div>
      </div>  
    </div>
  </div>
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>    



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
            <label for="no#mbre"></label>
            <input type="#" class="form-control" id="#" placeholder="#">
          </div>
        </div>
        <div class="form-row">
          <div class="form-group col-md-8">
            <label for="no#mbre"></label>
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



