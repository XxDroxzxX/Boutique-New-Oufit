<?php

class login_MO
{
    private $connection;
    function __construct($connection)
    {

        $this->connection = $connection;
    }
    function iniciarSesion($email, $clave)
    {

        $sql = "SELECT email from newoutfit.acceso where email ='$email' and clave ='$clave'";

        $this->connection->consultar($sql);

        $arreglo = $this->connection->extraerRegistro();

        return $arreglo;
    }


}
?>