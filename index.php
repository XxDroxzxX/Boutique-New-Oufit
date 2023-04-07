<?php
    //se incluyen el archivo de las conexiones para probar si realmente se conecta a la base de datos creada.
    /*include_once("config/connection.php");
    include("controllers/login_co.php");

    //se hace el llamado a la funcion creada en la clase Connection para de esta forma ejecutar la funcion desde el index.
    Connection::connectionBD(); 
    */
    require_once('controllers/login_co.php');
    require_once('config/connection.php');

    /*se crea la instancia del login en un objeto y luego llamamos al metodo del constructor del login que se va a encargar de pintar 
    el login por pantalla */
    
    //$login = new Login_co();
    //$login -> login_controller();

// Obtenemos una instancia de la conexión a la base de datos
$connection = Connection::connectionBD();

// Creamos una instancia de la clase LoginController, pasándole la conexión como argumento
$loginController = new LoginController($connection);

// Procesamos el inicio de sesión
$loginController->procesarInicioSesion();

?>