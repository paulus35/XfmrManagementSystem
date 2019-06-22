<?php //se inicia el código php
    error_reporting(E_ALL); //se inicia la clase para reportar errores
    ini_set('display_errors','1'); //se inicia con ini_set y los argumento de error y el intento 1
    //echo listar(); // se comentó esta línea debido a que no queremos que imprima listar() cada vez que se llama la función
    function listar(){ //se inicia la funcion listar
        $archivo = fopen("../listaUsuarios.csv","rb"); //se abre el archivo por medio del path

    if ($archivo == false){ //se comprueba la existencia del archivo
        return "Error al abrir el archivo"; //si no se pudo abrir, entonces se envía un mensaje de error
    } else {// si es verdadero, entonces obtiene los datos que contiene array(), y los ubica en $datos, el arreglo.
        $datos=array();
        while(!feof($archivo)) {//mientras el archivo no es end on file, o fin de archivo entonces sigue leyendo linea por linea hasta el final.  Y EOF es un método como muchos otros ya estructurados o declarados en el sistema
            $dato=fgetcsv($archivo,60,","); //El contenido del archivo y la longitud que se le haya asignado se encuentran en el arreglo $dato
            array_push($datos,$dato);//despues son enviados en array_push una matriz
        }
        fclose($archivo);//se cierra el archivo , cuando se sale del ciclo EOF, cuando se finaliza la lectura del archivo
        $response = json_encode($datos);//en el arreglo respuesta se encuentran los datos ya colectados en $datos
        return $response; //al llamarse esta funcion se regresa el contenido de $response
        }
    }
?>