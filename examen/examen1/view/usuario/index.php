<?php
  session_start();

  if(!isset($_SESSION['cargo']) || $_SESSION['cargo'] != 2){
    header('location: ../../index.php');
  }

?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>User</title>
    <link rel="stylesheet" href="../../css/bootstrap.min.css">
  </head>
  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="navbar bg-light">
          <div class="container-fluid">
           <ul class="nav nav-tabs">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="#">BIENVENIDOS</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="#">opcion 1</a>
             </li>
             <li class="nav-item">
                <a class="nav-link" href="#">opcion 2</a>
             </li>
             <div class="d-grid gap-2">
                <a href="../../controller/cerrarSesion.php">
                 <button class="btn btn-primary btn-lg pull-right" type="button" name="button">Cerrar sesion</button>
                </a>
             </div>
           </ul>
          </div> 
        </div>
      </div>
      <div class="row">
        <div class="col col-md-3 col-lg-3">
         <ul class="nav flex-column">
           <li class="nav-item">
             <a class="nav-link active" aria-current="page" href="#">USUARIOS</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">opcion 1</a>
           </li>
           <li class="nav-item">
             <a class="nav-link" href="#">opcion 2</a>
           </li>
          </ul>
        </div>
        <div class="col col-md-9 col-lg-9">
           Hola usuario estandar <?php echo ucfirst($_SESSION['nombre']); ?>
        </div>
      </div>
    </div>
  </body>
</html>
