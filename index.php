<?php
    include_once("config/connection.php");
    include("controllers/login_co.php");

    Connection::connectionBD(); 
    $login = new Login_co();
    $login -> login_controller();
?>