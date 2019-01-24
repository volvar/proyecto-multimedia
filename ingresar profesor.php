<?php $foto = $_GET['name'];
$foto= substr($foto, 4);
$foto= "cam/crops/".$foto;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>FORM INGRESO PROFESORES</title>
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
      <div class="media">
        <div class="media-body align-self-end">
    <img class= "img-thumbnail" height="200" width="200" src=<?php echo "'".$foto."'"; ?> alt="foto">
    </div>
  </div>
<form action="ingresar2.php" method="POST" enctype="#/form-data"/>
        <!-- NOMBRE Y RUT -->
        <div class="form-row">
          <div class="form-group col-md-4">
            <input type="hidden" name="foto" value=<?php echo "'".$foto."'"; ?>>
            <label for="nombre">Nombres</label>
            <input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre">
          </div>
          <div class="form-group col-md-4">
            <label for="nombre">Apellido Paterno</label>
            <input type="text" class="form-control" id="nombre" placeholder="Apellido Paterno" name="apell_pat">
          </div>
          <div class="form-group col-md-4">
            <label for="nombre">Apellido Materno</label>
            <input type="text" class="form-control" id="nombre" placeholder="Apellido Materno" name="apell_mat">
          </div>
          <div class="form-group col-md-3">
            <label for="rut">Rut</label>
            <input type="text" class="form-control" id="rut" placeholder="Rut" name="rut">
          </div>
          <div class="form-group col-md-1">
            <label for="dv">DV</label>
            <input type="text" class="form-control" id="dv" placeholder="dv" name="dv">
          </div>
           <div class="form-group col-md-2">
            <label for="contacto">Numero de contacto</label>
            <input type="text" class="form-control" id="contacto" placeholder="Telefono/Celular" name="contacto">
          </div>
        </div>
    
        <div class="form-row">
          <div class="form-group col-md-6">
            <label for="correo">Correo Institucional</label>
            <input type="text" class="form-control" id="correo" placeholder="correo" name="correo">
          </div>
          <div class="form-group col-md-6">
            <label for="correo">Correo Personal</label>
            <input type="text" class="form-control" id="correo2" placeholder="correo" name="correo2">
          </div>
        
        </div>
        <div class="form-group-row">
          <label for="tipoProfesor"></label>
          <div class="custom-control custom-radio">
        <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input" name="customRadio" value="planta">
        <label class="custom-control-label" for="customRadio1"> Planta</label>
      </div>
      <div class="custom-control custom-radio">
        <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input" name="customRadio" value="honorario">
        <label class="custom-control-label" for="customRadio2"> Honorario</label>
      </div>
      </div>
       <!-- <a href="Ingresaralumnofoto.php" class="btn btn-primary" role="button">Ingresar</a> -->
        <button type="submit" class="btn btn-primary" value="Submit">Ingresar</button>
      </form>  
    </div>
  
</body>
</html>


