<?php //inicia Código php
    include_once 'listaUsuarios.php'; //incluye el fichero listausuarios.php

    function leer_usuario(){//inicia la función leer usuario
        $array=listar();//se guarda en la variable $array, los argumentos que se extraen de la clase listar()
        $remplazar=array("[", "]", "false", '"');//se crea el array $remplazar con todos los carácteres que queremos remplazar
        $array2 = str_replace($remplazar, "", $array); //se reemplazan los carácteres de $remplazar contenidos en la variable $array
        $array3 = explode(',' , $array2);//se guarda el $array3 con todos las cadenas de texto separadas por "," sin los carácteres remplazados
        return $array3; //regresa en un array con los nombres de usuarios y contraseñas

    }

?>