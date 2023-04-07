<?php
/*
class Login_co{

    //metodo que incluye la vista del login y hace que se pinte en pantalla.

    public function login_controller(){
        include("views/login/login_vi.php");
        
    }


}
*/
require_once('models/login_mo.php');
include("views/login/login_vi.php");

class LoginController {
    private $usuario;
    
// Constructor de la clase, que recibe una conexión a la base de datos
    public function __construct($connection) {
        // Creamos una instancia de la clase Usuario pasándole la conexión como argumento
        $this->usuario = new Usuario($connection);
    }
// Método que procesa el inicio de sesión
    public function procesarInicioSesion() {
       // Verificamos si se envió un correo electrónico y una contraseña a través del formulario de inicio de sesión
        if(isset($_POST['email'])) {
            $email = $_POST['email'];
            $clave = $_POST['clave'];

// Buscamos al usuario en la base de datos
            $usuario = $this->usuario->buscarUsuario($email, $clave);
// Si se encuentra el usuario iniciamos una sesión y almacenamos el correo electrónico del usuario en una variable de sesión
            if($usuario) {
                session_start();
                $_SESSION['email'] = $usuario['email'];
// Redirigimos al usuario al dashboard
                header('Location: views/dashboard/dashboard_vi.php');
                exit;
// Si no se encuentra el usuario iniciamos una sesión y almacenamos un mensaje de error en una variable de sesión
            } else {
                session_start();
                $_SESSION['mensaje_error'] = "Usuario y/o contraseña incorrectos";

// volvemos a redirigimos al usuario a la página de inicio de sesión
                header('Location: index.php');
                exit;
            }
        }
    }
}

?>