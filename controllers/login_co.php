<?php

require_once "models/login_MO.php";

class login_CO
{

    function __construct()
    {
    }

    function iniciarSesion($email, $clave)
    {

        $connection = new connection();

        $login_MO = new login_MO($connection);

        $arreglo = $login_MO->iniciarSesion($email, $clave);

        if ($arreglo) {

            $objeto_accesos = $arreglo[0];

            $email = $objeto_accesos->email;

            $_SESSION['email'] = $email;
        } else {
            session_start();
            $_SESSION['mensaje_error'] = "Usuario y/o contraseña incorrectos";
            // volvemos a redirigimos al usuario a la página de inicio de sesión
            header('Location: index.php');
            exit;
        }
        header('Location: index.php');
    }
    function salir()
    {
        session_unset();
        session_destroy();
    }
}
?>