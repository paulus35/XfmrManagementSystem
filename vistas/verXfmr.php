<?php 
include_once '../includes/user.php';
include_once '../includes/user_session.php';
include_once '../includes/registroXfmr.php';
include_once '../includes/xfmr.php';
include "../includes/conexion.php";

$userSession = new UserSession();
$user = new User();

if(isset($_SESSION['user'])){
  //echo "hay sesion";
  $user->setUser($userSession->getCurrentUser());
} else {
  header ("location: ../../index.php");
}

$resultado = mysqli_query($conexion,'SELECT * FROM xfmr');
$trs = mysqli_fetch_array($resultado); 
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8_spanish" content="width=device-width, initial-scale=1.0">
    <title>Visualizar/Editar Transformadores</title>
    <link rel="stylesheet" href="../estilos/verXfmr.css">
    <link rel="stylesheet" href="/fonts.css">
    <link href="" rel="stylesheet">
  </head>
  <body>
  <div class="contenedor">
    <header>
        <a href="../../index.php"><h1 class="title">Xfmr Management System</h1></a>
        <h1 class="title">Bienvenido: <?php echo $user->getNombre();  ?></h1>
        <h1 class="title">Sesiones: 1</h1> <!-- Imprime el numero de sesiones activas, para la fase de prueba el numero es estático -->
        <a class="Reg" href="registrarXfmr.php"><h1>Registrar Nuevo</h1></a>
        <a class="Reg" href="editarXfmr.php"><h1>Editar</h1></a>
        <a href="../includes/logout.php"><h1>Cerrar sesión</h1></a>
    </header>
    <div class="login">
      <h3 class="fondo">Ver Transformadores</h3>
      <form class="fondo" action="" method="POST" name="verXfmr">
        <div class="tabla">
          <br>
            <table>
              <tr>
                <th>Nombre</th>
                <th>Capacidad</th>
                <th>Voltaje</th>
                <th>Conexión</th>
                <th>Disponibilidad</th>
                
                  <?php
                  
                  for($i=0;$i<$trs;$i++){
                  $id= $trs['id_xfmr'];
                  echo "<tr>";
                  echo "<td>";
                  echo $trs['Nombre'];
                  echo "</td>";
                  
                  echo "<td>";
                  echo $trs['capacidad'];
                  echo "</td>";
                  
                  echo "<td>";
                  echo $trs['vh'];
                  echo "</td>";
                                      
                  echo "<td>";
                  echo $trs['conexion'];
                  echo "</td>";
                                      
                  echo "<td>";
                  echo $trs['disponibilidad'];
                  echo "</td>";
                

                  echo "</tr>";
                  $trs = mysqli_fetch_array($resultado);
                  }

                  ?>
              </tr>
            </table>
        </div>
      
      </form>
    </div>
  </div>
  </body>
</html>
