
<!-- En la primer versión este código solo muestra la pantalla de registro de usuario. 
     En esta versión no se incluye la conexión a la base de datos ni las instrucciones de escritura hacia la base de datos -->

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
          <form class="" action="registro.php" method="POST">
            <p class="campo">Username:</p>
            <input class="inp" type="text" name="username" id="username" value="" require><br>
            <p class="campo">Nombre:</p>
            <input class="inp" type="text" name="nombre" id="nombre" value="" require><br>
            <p class="campo">Contraseña:</p>
            <input class="inp" type="password" name="pass" id="pass" value="" require><br>
            <input class="boton" type="submit" value="Registrar">
          </form>
        </article>
      </div>
    </div>
  </body>
</html>