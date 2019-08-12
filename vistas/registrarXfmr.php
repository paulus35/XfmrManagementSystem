<?php 
include_once '../includes/user.php';
include_once '../includes/user_session.php';
include_once '../includes/registroXfmr.php';

$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
  //echo "hay sesion";
  $user->setUser($userSession->getCurrentUser());
} else {
  header ("location: ../../index.php");
}
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8" content="width=device-width, initial-scale=1.0">
    <title>Registro de Transformador</title>
    <link rel="stylesheet" href="../estilos/registrarXfmr.css">
    <link rel="stylesheet" href="/fonts.css">
    <link href="" rel="stylesheet">
  </head>
  <body>
  <div class="contenedor">
    <header>
        <a href="../../index.php"><h1 class="title">Xfmr Management System</h1></a>
        <h1 class="title">Bienvenido: <?php echo $user->getNombre();  ?></h1>
        <h1 class="title">Sesiones: 1</h1> <!-- Imprime el numero de sesiones activas, para la fase de prueba el numero es estático -->
        <a class="Reg" href="verXfmr.php"><h1>Ver Todos</h1></a>
        <a class="Reg" href="editarXfmr.php"><h1>Editar</h1></a>
        <a href="../includes/logout.php"><h1>Cerrar sesión</h1></a>
    </header>
    <div class="login">
      <h3 class="fondo">Registrar Nuevo Transformador</h3>
      <form class="fondo" action="" method="POST" name="regXfmr">
        <div class="tabla">
        <br><br><br>
          <p class="campo">Nombre:</p>
          <input class="inp" type="text" name="nombre" value=""><br>
          <p class="campo">Capacidad:</p>
          <input class="inp" type="text" name="cap" value=""><br>
          <p class="campo">Voltaje:</p>
          <input class="inp" type="integer" name="vh" value=""><br>
          <p class="campo">Conexión:</p>
          <input class="inp" type="text" name="conexion" value=""><br>
          <p class="campo">Disponibilidad:</p>
          <input class="inp" type="text" name="disp" value=""><br>
        <div>
          <input class="boton" type="submit" value="               Registrar Transformador               ">
        </div>
      <?php  if (!empty($errores)): ?>
                <div class="error">
                  <ul> 
                    <?php echo $errores; ?> 
                  </ul>
                </div>
      <?php endif; ?>        
      </form>
    </div>
  </div>
  </body>
</html>
