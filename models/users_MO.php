<?php
class users_MO
{

    private $connection;
    function __construct($connection)
    {

        $this->connection = $connection;
    }

    function agregarEstudiantes($estu_codigo, $documento, $estu_nombres, $estu_apellidos)
    {

        $sql = "insert into persona (estu_codigo, documento, estu_nombres, estu_apellidos) values ('$estu_codigo', '$documento', '$estu_nombres', '$estu_apellidos')";

        $this->connection->consultar($sql);
    }

    function actualizarEstudiantes($estu_codigo, $documento, $estu_nombres, $estu_apellidos)
    {

        $sql = "update persona set estu_codigo='$estu_codigo', documento='$documento', estu_nombres='$estu_nombres', estu_apellidos='$estu_apellidos' where documento='$documento'";

        $this->connection->consultar($sql);
    }

    function seleccionar_documento($email = '')
    {

        if ($email) {

            $sql = "SELECT * FROM newoutfit.acceso WHERE email='$email'";

        } else {

            $sql = "SELECT * from newoutfit.acceso";
        }

        $this->connection->consultar($sql);

        $arreglo = $this->connection->extraerRegistro();

        return $arreglo;
    }
    function seleccionar($email = '')
    {

        if ($email) {

            $sql = "SELECT * from newoutfit.acceso where email='$email'";

        } else {

            $sql = "SELECT * from newoutfit.acceso";
        }

        $this->connection->consultar($sql);

        $arreglo = $this->connection->extraerRegistro();

        return $arreglo;
    }

    function seleccionarRol($email = '')
    {
        if ($email) {

            $sql = "SELECT r.nombre_rol FROM newoutfit.persona p JOIN newoutfit.acceso a ON p.email = a.email JOIN newoutfit.rol r ON p.id_rol = r.id_rol WHERE a.email ='$email'";

        }

        $this->connection->consultar($sql);

        $arreglo = $this->connection->extraerRegistro();

        return $arreglo;

    }

}