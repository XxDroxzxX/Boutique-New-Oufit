<?php
class Usuario {
    private $connection;

    // Constructor de la clase Usuario, recibe una conexión a la base de datos
    public function __construct($connection) {
        $this->connection = $connection;
    }
// este método que busca un usuario en la base de datos a través de su email y clave
    public function buscarUsuario($email, $clave) {

        // Se prepara la consulta SQL que se va a ejecutar
        $stmt = $this->connection->prepare("SELECT * FROM newoutfit.acceso WHERE email = :email AND clave = :clave");

        // Se enlazan los parámetros de la consulta con los valores recibidos
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':clave', $clave);

        // Se ejecuta la consulta
        $stmt->execute();

        // Se devuelve el resultado de la consulta
        return $stmt->fetch();
    }
}

?>