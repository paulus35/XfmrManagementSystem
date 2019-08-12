<?php
  
  include '../includes/user.php';
  include '../includes/user_session.php';

  if(isset($_POST['nombre']) && isset ($_POST['username']) && isset($_POST['password'])){
                
    $nombreForm =$_POST['nombre'];
    $userForm =$_POST['username'];
    $passForm =$_POST['password'];
    $errores = '';
    $user= new User();

      if (empty($nombreForm) or empty($userForm) or empty($passForm)) {
          $errores = "<p style='color:black; font-size: 25px; font-weight:bold; text-align:center'>Por favor rellena los datos correctamente.</p>";
          } else {

            if($user->validateUser($userForm)!=false) {
              $errores = "<p style='color:black; font-size: 25px; font-weight:bold; text-align:center'>El nombre de usuario ya existe</p>";
                  } else {
                  
                  $user->createUser($nombreForm, $userForm, $passForm);
                  header ("location:../../index.php");
                }
          }
  }
?>