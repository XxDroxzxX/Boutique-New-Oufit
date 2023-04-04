<?php
//Descomenta los echo del try catch si quieres probar que tienes conexion exitosa con tu base de datos.
class Connection{
    public static function connectionBD(){
    //nombre del host en el que sera servida la aplicacion.
    $host="localhost";
    //nombre de la base de datos creada en pgadmin.
    $dbname="newoutfit";
    //usuario con accesos a esa base de datos || Por defecto es postgres.
    $username="postgres";
    //contraseña con la que acceden a pgadmin
    $password="123";

    try {
        $connection =new PDO("pgsql:host=$host, dbname=$dbname",$username,$password);
       // echo "conectado";
    } catch (PDOException $exp) {
    //echo("sin conectar, ". $exp);
    }

    return $connection;
        
   }
}

?>