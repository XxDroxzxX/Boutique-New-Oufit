<?php
    require_once('controllers/login_co.php');
    require_once('config/connection.php');

    
// Obtenemos una instancia de la conexión a la base de datos
$connection = Connection::connectionBD();

// Creamos una instancia de la clase LoginController, pasándole la conexión como argumento
$loginController = new LoginController($connection);

// Procesamos el inicio de sesión
$loginController->procesarInicioSesion();

?>