<?php

  session_start();

  if (isset($_SESSION['user_id'])) {
    header('Location: /practica_login');
  }
  require 'database.php';

  if (!empty($_POST['email']) && !empty($_POST['password'])) {
    $records = $conn->prepare('SELECT id, email, password FROM users WHERE email = :email');
    $records->bindParam(':email', $_POST['email']);
    $records->execute();
    $results = $records->fetch(PDO::FETCH_ASSOC);

    $message = '';

    if (count($results) > 0 && password_verify($_POST['password'], $results['password'])) {
      $_SESSION['user_id'] = $results['id'];
      header("Location: /practica_login");
    } else {
      $message = 'ERROR';
    }
  }

?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link rel="stylesheet" href="css/styles.css">
  </head>
  <body>
    <?php require 'partials/header.php' ?>

    <?php if(!empty($message)): ?>
      <p> <?= $message ?></p>
    <?php endif; ?>

    <h1>INGRESA</h1>
    <span><a href="registrarse.php">REGISTRATE</a></span>

    <form action="login.php" method="POST">
      <input name="email" type="text" placeholder="Ingresar email">
      <input name="password" type="password" placeholder="Ingresar Contraseña">
      <input type="submit" value="ENVIAR">
    </form>
  </body>
</html>