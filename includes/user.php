<?php

/* Para la primera versión este código no tiene utilidad, pero es un avance de la versión final. */

include 'db.php';

class User extends DB{

    private $nombre;
    private $username;

    public function userExists($user, $pass){
        $sha1pass = sha1($pass);

        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE username =:user AND password =:pass');

        $query->execute(['user' => $user, 'pass' => $sha1pass]);

        if($query->rowCount()){
            return true;
        } else {
            return false;
        }

    }

    public function setUser($user){

        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE username =:user');

        $query->execute(['user' => $user]);

        foreach ($query as $currentUser) {
            $this->nombre = $currentUser['nombre'];
            $this->nombre = $currentUser['username'];
        }

    }

    public function getNombre(){
        return $this->nombre;
    }

}


?>