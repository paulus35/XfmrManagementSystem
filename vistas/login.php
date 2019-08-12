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
        <a href="/vistas/registrate.php"><h1>Registrate</h1></a>
      </header>
      <div class="login">
        <article class="fondo">
          <img src="../img/tr.jpg" alt="User">
          <h3>Inicio de Sesión</h3>
          <form action="" method="POST">
            <span class="icon-user"></span><input class="inp" type="text" name="username"><br>
            <span class="icon-key"></span><input class="inp" type="password" name="password"><br>
            <input class="boton" type="submit" name="inicio" value="Iniciar Sesión">
            <?php if(isset($errorLogin)){ 
              echo "<p style='color:black; font-size: 25px; font-weight:bold; text-align:center'>".$errorLogin."</p>";
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