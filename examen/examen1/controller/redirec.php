<?php

  session_start();

  if($_SESSION['cargo'] == 1){
    header('location: ../view/administrador/index.php');
  }else if($_SESSION['cargo'] == 2){
    header('location: ../view/usuario/index.php');
  }

 ?>