<?php

include 'db.php';

class User extends DB{

    private $nombre;
    private $user;
    private $pass;

    public function userExists($user, $pass){
        $sha1pass = sha1($pass); //aquí va sha1($pass)

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

    public function createUser($nombre, $user, $pass){
        $sha1pass = sha1($pass); //aquí va sha1($pass)

        $query = $this->connect()->prepare('INSERT INTO usuarios (id,nombre,username,password) VALUES (null,:nombre,:user,:pass)');

        $query->execute([':nombre' => $nombre, ':user' => $user, ':pass' => $sha1pass]);

        if($query->rowCount()){
            //echo "escribio";
            return true;
        } else {
            //echo "no escribio";
            return false;
        }

    }

    public function validateUser($user){
        
        $query = $this->connect()->prepare('SELECT * FROM usuarios WHERE username = :user LIMIT 1');
        
        $query->execute(array(':user' => $user));
        
        return $resultado = $query->fetch();
    }

}



?>