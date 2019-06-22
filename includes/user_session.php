<?php // Este codigo se utilizará en la versión final para la sesión verificada en la base de datos

class UserSession{

    public function __construct(){
        session_start();
        
    }

    public function setCurrentUser($user){
        $_SESSION['user'] = $user;
        
    }

    public function getCurrentUser(){
        return $_SESSION['user'];
    }

    public function closeSession(){
        session_unset();
        session_destroy();
        
    }

}




?>