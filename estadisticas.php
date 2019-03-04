<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>estadisticas</title>
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
      <h2>Estadisticas</h2>
    </div>
  </div>
    <div class="container ">

      <form action="estadisticas-mostrar.php" method="POST" enctype="multipart/form-data"/>
        <!-- NOMBRE Y RUT -->
          <div class="form-group col-md-2"></div>
          <div class="form-group col-md-2">
            <label for="fechaor">Inicio</label>
            <br>
            <input type="date" class="form-control" name="fechaor" id="fechaor">
          </div>
          <div class="form-group col-md-2">
            <label for="fechater">Termino</label>
            <br>
            <input id="fechater" class="form-control" name="fechater" type="date">
          </div>
          <div class="form-group col-md-3">
          </div>
           <div class="form-group col-md-2">
          
          </div>
        </div><input type="submit" class="form-control" value="Generar">
      </div>
        
      </form> 


    </div>
</body>
</html>
