<?php

require_once "modelos/users_MO.php";

class users_CO
{

    function __construct()
    {
    }

    function agregarUsers()
    {

        $connection = new connection();

        $users_MO = new users_MO($connection);

        $email = $_POST['email'];
        $estu_codigo = $_POST['estu_codigo'];
        $estu_nombres = htmlentities($_POST['estu_nombres'], ENT_QUOTES);
        $estu_apellidos = htmlentities($_POST['estu_apellidos'], ENT_QUOTES);

        if (empty($documento) or empty($estu_nombres) or empty($estu_apellidos)) {

            $arreglo_respuesta = [

                "estado" => "ERROR",
                "mensaje" => "HAY CAMPOS VACIOS"

            ];

            exit(json_encode($arreglo_respuesta));
        }
        if (strlen($estu_codigo) > 11 or strlen($documento) > 45 or strlen($estu_nombres) > 45 or strlen($estu_apellidos) > 45) {

            $arreglo_respuesta = [

                "estado" => "ERROR",
                "mensaje" => "ha exedido el numero de caracteres"

            ];

            exit(json_encode($arreglo_respuesta));
        }
        $arreglo_estudiantes = $users_MO->seleccionar($email);

        $arreglo_estudiantes_documento = $users_MO->seleccionar_documento($email);

        if ($arreglo_estudiantes) {

            $arreglo_respuesta = [

                "estado" => "ERROR",
                "mensaje" => "Registro de codigo duplicado"

            ];

            exit(json_encode($arreglo_respuesta));
        }
        if ($arreglo_estudiantes_documento) {

            $arreglo_respuesta = [

                "estado" => "ERROR",
                "mensaje" => "Registro duplicado"

            ];

            exit(json_encode($arreglo_respuesta));
        }

        $users_MO->agregarEstudiantes($estu_codigo, $documento, $estu_nombres, $estu_apellidos);

        $estu_id = $connection->traerUltimoId();

        $arreglo_respuesta = [

            "estu_id" => $estu_id,
            "estado" => "EXITO",
            "mensaje" => "Registro agregado"

        ];

        exit(json_encode($arreglo_respuesta));

    }

    function actualizarEstudiantes()
    {

        $connection = new connection();
        $users_MO = new users_MO($connection);

        $estu_id = $_POST['estu_id'];
        $documento = $_POST['documento'];
        $estu_codigo = $_POST['estu_codigo'];
        $estu_nombres = htmlentities($_POST['estu_nombres'], ENT_QUOTES);
        $estu_apellidos = htmlentities($_POST['estu_apellidos'], ENT_QUOTES);

        if (empty($estu_codigo) or empty($documento) or empty($estu_nombres) or empty($estu_apellidos)) {

            $arreglo_respuesta = [

                "estado" => "ERROR",
                "mensaje" => "HAY CAMPOS VACIOS"

            ];

            exit(json_encode($arreglo_respuesta));
        }
        if (strlen($estu_codigo) > 11 or strlen($documento) > 45 or strlen($estu_nombres) > 45 or strlen($estu_apellidos) > 45) {

            $arreglo_respuesta = [

                "estado" => "ERROR",
                "mensaje" => "ha exedido el numero de caracteres"

            ];

            exit(json_encode($arreglo_respuesta));
        }
        $arreglo_estudiantes = $users_MO->seleccionar($estu_codigo);

        $arreglo_estudiantes_documento = $users_MO->seleccionar_documento($documento);

        if ($arreglo_estudiantes) {

            $arreglo_respuesta = [

                "estado" => "ERROR",
                "mensaje" => "Registro de codigo duplicado"

            ];

            exit(json_encode($arreglo_respuesta));
        }
        if ($arreglo_estudiantes_documento) {

            $arreglo_respuesta = [

                "estado" => "ERROR",
                "mensaje" => "Registro duplicado"

            ];

            exit(json_encode($arreglo_respuesta));
        }

        $users_MO->actualizarEstudiantes($estu_id, $estu_codigo, $documento, $estu_nombres);

        $actualizado = $connection->filasAfectadas();

        if ($actualizado) {

            $mensaje = "Registro Actualizado";
            $estado = 'EXITO';

        } else {

            $mensaje = "No se realizaron cambios";
            $estado = 'ADVERTENCIA';
        }

        $arreglo_respuesta = [
            "estado" => $estado,
            "mensaje" => $mensaje
        ];

        exit(json_encode($arreglo_respuesta, true));

    }

}

?>