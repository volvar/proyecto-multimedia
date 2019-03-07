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
      <h2>Reporte Personal</h2>

  </div>
  </div>
    <div class="container ">

      <form action="pdffinal.php" method="POST" enctype="multipart/form-data"/>
        <!-- NOMBRE Y RUT -->
        <div class="form-row">
          
          
          
          <div class="form-group col-md-3">
            <label for="rut">Rut</label>
            <input type="text" class="form-control" id="rut" placeholder="Rut" name="rut">
          </div>
          <div class="form-group col-md-1">
            <label for="dv">DV</label>
            <input type="text" class="form-control" id="dv" placeholder="dv" name="dv">
          </div>
          <div class="form-group col-md-8"></div>
<div class="form-group col-md-2">
        <input type="submit" value="Generar" class="btn btn-primary"></div>
          
          </div>
        </div>
    
          <div class="form-group col-md-2"></div>
          
        </div>
        <div class="form-group-row">
          
      </div>
     	
      </div>
         <!-- <button class="btn btn-primary" role="button">Ingresar</button>  -->
        
      </form> 
</div>

    </div>
</body>
</html>