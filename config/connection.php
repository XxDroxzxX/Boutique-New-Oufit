<?php
class Connection{
    public static function connectionBD(){
    $host="localhost";
    $dbname="newoutfit";
    $username="postgres";
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