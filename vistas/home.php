<!DOCTYPE html> <!-- Declaración del tipo de documento HTML -->
<html lang="es">
<head>
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Xfmr Management System</title> <!-- Titulo de la pagina -->
    <link rel="stylesheet" href="../estilos/index.css">
</head>
<body>
    <div>
    <header>
        <h1 class="title">Xfmr Management System</h1> 
        <h1 class="title">Bienvenido</h1>
        <h1 class="title">Sesiones: 1</h1> <!-- Imprime el numero de sesiones activas, para la fase de prueba el numero es estático -->
        <a href="../includes/logout.php"><h1>Cerrar sesión</h1></a>
    </header>
    </div>
    <div> <!-- Datos generales de todos los objetos (transformadores), en la versión final se consultarán de la base de datos -->
        <article class="contenedor">      
            <img class="" src="\img\t1.jpg" alt=""><h1>TR-12-115-34.5-Dyn1</h1><p>En almacén Divisional. Requiere boquillas de AT.</p>
        </article>
        <article class="contenedor">      
            <img class="" src="\img\t2.jpg" alt=""><h1>TR-16-115-13.8-Ynyn0</h1><p>En almacén Hermosillo. Accesorios en mal estado.</p>
        </article>
        <article class="contenedor">      
            <img class="" src="\img\t3.jpg" alt=""><h1>TR-6-110-13.8-Dyn1</h1><p>Almacén Divisional. Buen estado.</p>
        </article>
        <article class="contenedor">      
            <img class="" src="\img\t4.jpg" alt=""><h1>TR-6-115-13.8-Dyn1</h1><p>En almacén Navojoa. Buen estado.</p>
        </article>
        <article class="contenedor">      
            <img class="" src="\img\t5.jpg" alt=""><h1>TR-10-115-34.5-Dyn1</h1><p>En almacén Divisional. Buen estado.</p>
        </article>
    </div>
    <footer>
        <p>Derechos reservados 2019.</p>
    </footer>
</body>
</html>