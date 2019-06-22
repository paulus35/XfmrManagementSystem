<?php //inicia el código php

    include_once 'user_session.php'; //se incluye el fichero user sesión

    $userSession = new UserSession(); //se crea un nuevo objeto sesión 
    $userSession->closeSession(); // se crea un nuevo objeto de cerrar sesión

    header("location: ../../index.php"); // se muestra el path donde se localiza el fichero índex.php

?>