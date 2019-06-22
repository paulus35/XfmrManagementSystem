<?php 
  $errorsesion=NULL; // Variable utilizada para verificar si ha habido un error al iniciar sesión

  include_once "../includes/leer_usuario.php"; // Incluye el path del fichero leer_usuario.php
              
  $array3 = leer_usuario(); // El resultado de la función leer_usuario() se asigna a la variable $array3

  if(isset($_POST['username']) && isset($_POST['password'])){ // Verificación de la captura del username y el password
              
  $usuario = $_POST['username'].sha1($_POST['password']); /* Se asigna a la variable $usuario la concatenación del ...
                ... username y el password cifrado en SHA1 */
  ///////////////////////////////////////////////////

  for ($i=0; $i!=count($array3)-1; ++$i) { /* Utilización de ciclo for para verifcar que el nombre de usuario y 
    la contraseña de todos los usiarios. */
    
    if ($array3[$i].$array3[$i+1] == $usuario){ // Verificación de que el usuario y su contraseña coincidan
      
      header('location:home.php'); // Si se cumple la condición el usuario es redireccionado a su sesion.
      break;

    } 
  }$errorsesion=TRUE; // Si nunca se cumple la condición se le informa al usuario del error.
 } 
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" content="width=device-width, initial-scale=1.0">
    <title>Inicio de sesión</title>
    <link rel="stylesheet" href="../estilos/login.css">
    <link rel="stylesheet" href="../fonts.css">
    <link href="" rel="stylesheet">
  </head>
  <body>
    <div class="contenedor">
      <header>
        <a href="../../index.php"><h1 class="title">Xfmr Management System</h1></a>
        <a href="registro.php"><h1>Registrate</h1></a>
      </header>
      <div class="login">
        <article class="fondo">
          <img src="../img/tr.jpg" alt="User">
          <h3>Inicio de Sesión</h3>
          <form action="" method="POST">
            <span class="icon-user"></span><input class="inp" type="text" name="username"><br>
            <span class="icon-key"></span><input class="inp" type="password" name="password"><br>
            <input class="boton" type="submit" name="inicio" value="Iniciar Sesión">
            <?php if ($errorsesion==TRUE){ 
                      echo "<h1>Nombre de usuario y/o password incorrecto</h1>"; // Si el error de sesión es TRUE se informa al usuario
                  }
            ?>
          </form>
        </article>
      </div>
    </div>

   <footer>
      <p>Derechos reservados 2019.</p>
  </footer>
  </body>
</html>