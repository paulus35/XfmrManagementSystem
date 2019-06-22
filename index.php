<?php //Inicia el código php que muestra la pantalla principal dependiendo si la sesión está activa
include_once 'includes/user.php'; // Incluye y evalúa el fichero, en este caso user.php
include_once 'includes/user_session.php';//incluye el fichero user_session.php


$userSession = new UserSession(); //se crea un objeto UserSession(), 
$user = new User(); //Se crea un nuevo objeto de tipo USER()

if(isset($_SESSION['user'])){//se condiciona la session para saber la existencia de user

    $user->setUser($userSession->getCurrentUser());//aqui muestra el valor nulo en el espacio que se observa en pantalla, correspondiente a user
    include_once 'vistas/home.php';//Incluye el fichero home.php

} else {

    include_once 'vistas/index.php'; // Si no entra en sesión, regresa a la pagina principal
    
}

?>
