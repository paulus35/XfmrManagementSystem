<?php 
include_once '../includes/user.php';
include_once '../includes/user_session.php';
include_once '../includes/registroXfmr.php';
include "../includes/conexion.php";

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
    <title>Editar Transformador</title>
    <link rel="stylesheet" href="../estilos/editarXfmr.css">
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
        <a class="Reg" href="registrarXfmr.php"><h1>Registrar Nuevo</h1></a>
        <a href="../includes/logout.php"><h1>Cerrar sesión</h1></a>
    </header>
    <div class="login">
      <h3 class="fondo">Editar Transformador</h3>
      <form class="fondo" action="" method="POST" name="editarXfmr">
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
          <input class="boton" type="submit" value="      Consultar      " name="btn_consultar">
          <input class="boton" type="submit" value="        Editar       " name="btn_actualizar">
          <input class="boton" type="submit" value="       Eliminar      " name="btn_eliminar">
        </div>
        
      </form>
    </div>
    <?php
      $nomForm="";
      $capForm="";
      $voltForm="";
      $conForm="";
      $dispForm="";

      // CONSULTAR //

      if(isset($_POST['btn_consultar']))
        {
          $nomForm=$_POST['nombre'];
          $existe=0;
          if($nomForm==""){
            $error="El nombre es un campo obligatorio";
            echo "<p style='color:black; font-size: 25px; font-weight:bold; text-align:center'>".$error."</p>";
          } else {
            $resultados = mysqli_query($conexion,"SELECT * FROM xfmr WHERE Nombre = '$nomForm'");
            while($consulta = mysqli_fetch_array($resultados))
            {
              echo 
              "
                <table width=\"100%\" border=\"1\" bordercolor=\"#fff\">
                  <tr>
                    <td><b><center><p style='color:#b8cbd6; font-size: 18px; font-weight:bold; text-align:center'>Nombre</p></center></b></td>
                    <td><b><center><p style='color:#b8cbd6; font-size: 18px; font-weight:bold; text-align:center'>Capacidad</p></center></b></td>
                    <td><b><center><p style='color:#b8cbd6; font-size: 18px; font-weight:bold; text-align:center'>Voltaje</p></center></b></td>
                    <td><b><center><p style='color:#b8cbd6; font-size: 18px; font-weight:bold; text-align:center'>Conexion</p></center></b></td>
                    <td><b><center><p style='color:#b8cbd6; font-size: 18px; font-weight:bold; text-align:center'>Disponibilidad</p></center></b></td>
                  </tr>
                  <tr>
                    <td><center><p style='color:#b8cbd6; font-size: 12px; font-weight:bold; text-align:center'>".$consulta['Nombre']."</p></center></td>
                    <td><center><p style='color:#b8cbd6; font-size: 12px; font-weight:bold; text-align:center'>".$consulta['capacidad']."</p></center></td>
                    <td><center><p style='color:#b8cbd6; font-size: 12px; font-weight:bold; text-align:center'>".$consulta['vh']."</p></center></td>
                    <td><center><p style='color:#b8cbd6; font-size: 12px; font-weight:bold; text-align:center'>".$consulta['conexion']."</p></center></td>
                    <td><center><p style='color:#b8cbd6; font-size: 12px; font-weight:bold; text-align:center'>".$consulta['disponibilidad']."</p></center></td>
                  </tr>
                </table>
              
              ";
              $existe++;
            }
            if($existe==0){
              $error="El Transformador no existe";
              echo "<p style='color:black; font-size: 25px; font-weight:bold; text-align:center'>".$error."</p>";}
          }
        //echo "Presiono el boton consultar";
        }
      
      // ACTUALIZAR //
      
      if(isset($_POST['btn_actualizar']))
        {
          $nomForm=$_POST['nombre'];
          $capForm=$_POST['cap'];
          $voltForm=$_POST['vh'];
          $conForm=$_POST['conexion'];
          $dispForm=$_POST['disp'];

          if($nomForm==""){
            $error="Los campos son obligatorios";
            echo "<p style='color:black; font-size: 25px; font-weight:bold; text-align:center'>".$error."</p>";
          } else {
            $_UPDATE_SQL="UPDATE xfmr Set 
            
            Nombre='$nomForm', 
            capacidad='$capForm', 
            vh='$voltForm', 
            conexion='$conForm', 
            disponibilidad='$dispForm'           
            
            WHERE Nombre='$nomForm'"; 
          
            mysqli_query($conexion,$_UPDATE_SQL);
            $error="Transformador actualizado con exito";
            echo "<p style='color:black; font-size: 25px; font-weight:bold; text-align:center'>".$error."</p>"; 
          }

        }
    
      // ELIMINAR //

      if(isset($_POST['btn_eliminar'])){

          $nomForm=$_POST['nombre'];
          $existe=0;

          if($nomForm==""){
            $error="El nombre es un campo obligatorio";
            echo "<p style='color:black; font-size: 25px; font-weight:bold; text-align:center'>".$error."</p>";
          } else {

            $resultados = mysqli_query($conexion,"SELECT * FROM xfmr WHERE Nombre = '$nomForm'");
            
            while($consulta = mysqli_fetch_array($resultados)){
            
              $existe++;
            
            }
            
            if($existe==0){
              $error="El Transformador no existe";
              echo "<p style='color:black; font-size: 25px; font-weight:bold; text-align:center'>".$error."</p>";
            } else {
              $_DELETE_SQL =  "DELETE FROM xfmr WHERE Nombre = '$nomForm'";
              mysqli_query($conexion,$_DELETE_SQL);
              $error="Transformador eliminado con exito";
              echo "<p style='color:black; font-size: 25px; font-weight:bold; text-align:center'>".$error."</p>";
            }
          } 
        
        }

    ?>

  </div>
  </body>
</html>
