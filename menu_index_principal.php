<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>menu index princial</title>
  <link rel="stylesheet" href="css/bootstrap.css">
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


<!-- slider -->
<div class="container">
  
    
  </div>

</div>
</body>
</html>