<?php
require_once "libs/constants.php";
require_once "libs/connection.php";

if (isset($_SESSION['email'])) {

    require_once "libs/front_controller.php";

    if (isset($_GET['ruta'])) {

        $ruta = $_GET['ruta'];

    } else {
        $ruta = '';

    }

    $front_controller = new front_controller($ruta);

} else if (isset($_POST['email']) and isset($_POST['clave'])) {

    $email = $_POST['email'];

    $clave = $_POST['clave'];

    require_once "controllers/login_CO.php";

    $login_CO = new login_CO();

    $login_CO->iniciarSesion($email, $clave);

} else {

    require_once "views/login_VI.php";

    $login_VI = new login_VI();

    $login_VI->iniciarSesion();
}
?>