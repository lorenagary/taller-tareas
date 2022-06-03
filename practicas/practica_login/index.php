<?php
  session_start();

  require 'database.php';

  if (isset($_SESSION['user_id'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE id = :id');
    $records->bindParam(':id', $_SESSION['user_id']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {
      $user = $results;
    }
  }
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>BIENVENIDO</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <?php require 'partials/header.php' ?>

    <?php if(!empty($user)): ?>
      <br>Bienvenido <?= $user['email']; ?>
      <br>Estas ingresado
      <a href="cerrarsesion.php">
        Cerrar sesion
      </a>
    <?php else: ?>
      <h1>INGRESA O REGISTRATE</h1>

      <a href="login.php">INGRESAR</a>
      <br>
      <a href="registrarse.php">REGISTRARSE</a>
    <?php endif; ?>
  </body>
</html>