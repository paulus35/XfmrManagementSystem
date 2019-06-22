<?php // Código para establecer la conexión a la base de datos

class DB{ //Clase base de datos con todas las funciones para iniciar la conexión a la base de datos
    private $host; //Se declara privado el host, db, user, password, charset
    private $db;
    private $user;
    private $password;
    private $charset;

    public function __construct(){//Se inicia un constructor, el básico o por default 
        $this->host     = 'localhost'; // Señala o hace referencia al localhost
        $this->db       = 'id9920821_db_ejercicio1'; //reconoce la base de datos
        $this->user     = 'id9920821_root'; //reconoce el usuario
        $this->password = 'lalolanda28'; //reconoce la contraseña, 
        $this->charset  = 'utf8mb4'; //todos son atributos de especificaciones 
    }

    function connect(){ //funcion conectar
    
        try{ // especifica una serie de acciones y utiliza una recomendación especifica si existe una excepción. En este caso si no se puede conectar a la base de datos regresa un mensaje de error en la coneccion.
            
            $connection = "mysql:host=" . $this->host . ";dbname=" . $this->db .  
";charset=" . $this->charset; //conectar a la base de datos, con path

            $options = [ 
                PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES   => false,
            ];
            $pdo = new PDO($connection, $this->user, $this->password, $options); // Se crea un nuevo objeto PDO para la conexión, con el usuario y password incluidos.
    
            return $pdo;

        }catch(PDOException $e){
            print_r('Error connection: ' . $e->getMessage());
        }   
    }
}






?>