<?php
// se crea una variable ruta para almacenar la direccion raiz en donde estan ubicados los archivos css.
$ruta = "http://localhost/Boutique-New-Oufit/";
session_start();

if (isset($_SESSION['error'])) {
    $mensaje_error = $_SESSION['error'];
    unset($_SESSION['error']);
} else {
    $mensaje_error = "";
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- en este link se carga esa variable $ruta y se concatena con la ruta faltante para lograr traer el css de forma correcta -->
    <link rel="stylesheet" href="<?php echo $ruta; ?>/views/css/login.css" type="text/css">
    <title>NEW OUFIT</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="index.php" method="POST">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email" name="email" id="inputEmail" required>
                        <label for="">Correo Electronico</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline" id="togglePassword"></ion-icon>
                        <input type="password" name="clave" id="inputPassword" required>
                        <label for="inputPassword">Contraseña</label>
                    </div>
                    <button type="submit">Acceder</button>
                </form>
                <div class="mensaje-error oculto"></div>
                <div class="login-form-container">
                </div>
            </div>
        </div>

    </section>

    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="<?php echo $ruta; ?>/views/js/togglePassword.js"></script>
    <script>
        function mostrarMensajeError(mensaje) {
            var mensajeError = document.querySelector(".mensaje-error");
            mensajeError.innerHTML = mensaje;
            mensajeError.classList.remove("oculto");
        }

        function ocultarMensajeError() {
            var mensajeError = document.querySelector(".mensaje-error");
            mensajeError.innerHTML = "";
            mensajeError.classList.add("oculto");
        }

        var mensaje = "<?php echo isset($_SESSION['mensaje_error']) ? $_SESSION['mensaje_error'] : ''; ?>";
        if (mensaje) {
            mostrarMensajeError(mensaje);
            <?php unset($_SESSION['mensaje_error']); ?>
        }

        document.addEventListener("click", ocultarMensajeError);
    </script>
</body>

</html>