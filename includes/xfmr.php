<?php

class Xfmr extends DB{

    private $nom;
    private $cap;
    private $vh;
    private $conexion;
    private $disp;
    

    public function createXfmr($nom, $cap, $vh, $conexion, $disp){
        
        $query = $this->connect()->prepare('INSERT INTO xfmr (id_xfmr,Nombre,capacidad,vh,conexion,disponibilidad) 
        VALUES (null,:nom,:cap,:vh,:conexion,:disp)');

        $query->execute([':nom' => $nom,':cap' => $cap,':vh' => $vh,':conexion' => $conexion,':disp' => $disp]);

        if($query->rowCount()){
            //echo "escribio";
            return true;
        } else {
            //echo "no escribio";
            return false;
        }

    }

    public function validateSerie($nom){
        
        $query = $this->connect()->prepare('SELECT * FROM xfmr WHERE Nombre = :Nombre LIMIT 1');
        
        $query->execute(array(':Nombre' => $nom));
        
        return $resultado = $query->fetch();
    }


}


?>