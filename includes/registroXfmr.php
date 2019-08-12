<?php 

include '../includes/xfmr.php';

  if(isset($_POST['nombre']) && isset($_POST['disp'])){
    
    $nombreForm = $_POST['nombre'];
    $capForm = $_POST['cap'];
    $vhForm = $_POST['vh'];
    $conForm = $_POST['conexion'];
    $dispForm = $_POST['disp'];
    $errores = '';
    $Xfmr= new Xfmr();
     
      if (empty($nombreForm) or empty($dispForm)) { 
          $errores .= "<li><p style='color:black; font-size: 25px; font-weight:bold; text-align:center'>Por favor rellena los datos correctamente.</p></li>";
          } else {

            if($Xfmr->validateSerie($nombreForm)!=false) {
              $errores .= "<li><p style='color:black; font-size: 25px; font-weight:bold; text-align:center'>El nombre ya existe.</p></li>";
                  } else {
                   
                  $Xfmr->createXfmr($nombreForm,$capForm,$vhForm,$conForm,$dispForm);
                  //header ("location:../../index.php");
                }
          }
    }
?>