<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>menu index princial</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <style>
  body{ 
     padding-top:60px; 
    } 

</style>
</head>
<body>
  
  <!-- inicio menu -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top ">
    <!-- boton pantalla pequeña -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <!-- fin boton pantalla pequeña -->
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <!-- inicio LOGIN -->
      <div class="container">
        <div class="row justify-content-end">
          <ul class="navbar-nav">
            <li class="nav-item active dropdown btn btn-primary" >
              <a class="nav-link dropdown-toggle " href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Login
              </a>
              <div class="dropdown-menu " aria-labelledby="navbarDropdownMenuLink" >
                <form class="pr-2 pl-2" action="logalumno.php" method="POST">
                  <div class="form-group"> 
                      <label for="usuario">Usuario:</label>
                      <input type="text" class="form-control" id="usuario" name="Usuario">
                    </div> 
                  <div class="form-group">
                      <label for="clave">Clave:</label>
                      <input type="password" class="form-control" id="clave" name="Clave">
                    </div> 
                    <button type="submit" class="btn btn-primary">Enviar</button>
                  </form>  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script><script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>     
              </div>
            </li>
          <!-- fin login -->
          </ul>
        </div>
      </div>
    </div>
  </nav>
<!-- fin menu -->
<!-- slide -->
<div class="container-fluid btn-dark" >
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
    </ol>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img class="img-responsive d-block " src="img.jpg" alt="1">
      </div>
      <div class="carousel-item">
        <img class="img-responsive d-block" src="img_1.jpg" alt="2">
      </div>
      <div class="carousel-item">
        <img class="img-responsive d-block" src="img_2.jpg" alt="3">
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
<!-- fin slide -->
</body>
</html>