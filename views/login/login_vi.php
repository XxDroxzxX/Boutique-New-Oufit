<?php
// se crea una variable rutacss para almacenar la direccion raiz en donde estan ubicados los archivos css.
$rutacss= "http://localhost/Boutique-New-Oufit/";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- en este link se carga esa variable $rutacss y se concatena con la ruta faltante para lograr traer el css de forma correcta -->
  <link rel="stylesheet" href="<?php echo $rutacss;?>/views/css/login.css" type="text/css">
  <title>NEW OUFIT</title>
</head>
<body>
    <section>
        <div class="form-box">
            <div class="form-value">
                <form action="">
                    <h2>Login</h2>
                    <div class="inputbox">
                        <ion-icon name="mail-outline"></ion-icon>
                        <input type="email"  id="inputEmail" required>
                        <label for="">Correo Electronico</label>
                    </div>
                    <div class="inputbox">
                        <ion-icon name="lock-closed-outline" id="togglePassword"></ion-icon>
                        <input type="password" id="inputPassword" required>
                        <label for="inputPassword">Contraseña</label>
                    </div>
                    <button>Acceder</button>
                </form>
            </div>
        </div>
    </section>
    <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
    <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
    <script src="<?php echo $rutacss;?>/views/js/togglePassword.js"></script>
</body>
</html>

