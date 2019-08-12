<?php session_start();
if(isset($_SESSION['user'])){
  header ("location:../../index.php");
} 
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="../estilos/registro.css">
    <link rel="stylesheet" href="/fonts.css">
    <link href="" rel="stylesheet">
  </head>
  <body>
    <div class="contenedor">
      <header>
        <a href="../../index.php"><h1 class="title">Xfmr Management System</h1></a>
      </header>
      <div class="login">
        <article class="fondo">
          <img src="../img/tr.jpg" alt="User">
          <h3>Registrarse</h3>
          <form class="" action="" method="POST" name="login">
            <p class="campo">Nombre:</p>
            <input class="inp" type="text" name="nombre" id="nombre" value="" require><br>
            <p class="campo">Username:</p>
            <input class="inp" type="text" name="username" id="username" value="" require><br>
            <p class="campo">Contraseña:</p>
            <input class="inp" type="password" name="password" id="password" value="" require><br>
            <input class="boton" type="submit" value="Registrar">
            <?php
              include_once '../includes/registro.php';
              if(!empty($errores)){ 
              echo $errores;
              } 
            ?>
          </form>
        </article>
      </div>
    </div>
  </body>
</html>