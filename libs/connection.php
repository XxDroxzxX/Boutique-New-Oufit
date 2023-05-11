<?php

class connection
{

    private $enlace;
    private $resultado;

    function __construct()
    {

        $ip_maquina = HOST;
        $base_de_datos = DBNAME;
        $usuario = USERNAME;
        $clave = PASSWORD;

        try {
            $this->enlace = new PDO("pgsql:host=$ip_maquina, dbname=$base_de_datos", $usuario, $clave);
       
        } catch (PDOException $exp) {
        }

    }

    function consultar($sql)
    {

        $this->resultado = $this->enlace->query($sql) or exit('consulta mal estructurada');

    }

    function extraerRegistro()
    {

        return $this->resultado->fetchAll(PDO::FETCH_OBJ);

    }

    function filasAfectadas()
    {

        if ($this->resultado->rowCount() > 0) {

            return true;
        } else {

            return false;
        }
    }

    function traerUltimoId()
    {

        return $this->enlace->lastInsertId();
    }

    function errorConsultar()
    {

        $arreglo_respuesta = [
            "estado" => "ERROR",
            "mensaje" => "consulta mal estructurada"

        ];

        exit(json_encode($arreglo_respuesta));

    }
}
?>