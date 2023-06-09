<?php
class dashboard_VI
{
    public function __construct()
    {
    }

    public function verDashboard()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
        require_once "libs/connection.php";
        require_once "models/users_MO.php";

        $connection = new connection();

        $users_MO = new users_MO($connection);
        $arreglo_administrativo = $users_MO->seleccionarRol($_SESSION['email']);
        $objeto_administrativo = $arreglo_administrativo[0];
        $nombre_rol = $objeto_administrativo->nombre_rol;
        ?>

        <!DOCTYPE html>
        <html lang="en" dir="ltr">

        <head>
            <meta charset="UTF-8">
            <title>Dashboard</title>
            <link rel="stylesheet" href="dist/css/dashboard.css">
            <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
            <link rel="stylesheet" href="dist/css/style.css">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
        </head>

        <body>
            <div class="sidebar close">
                <div class="logo-details">
                    <i class='bx bxs-store-alt'></i>
                    <span class="logo_name">New Outfit</span>
                </div>
                <ul class="nav-links">
                    <li>
                        <a href="#">
                            <i class='bx bx-grid-alt'></i>
                            <span class="link_name">Inicio</span>
                        </a>
                        <ul class="sub-menu blank">
                            <li><a class="link_name" href="#">Inicio</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="iocn-link">
                            <a href="#">
                                <i class='bx bx-collection'></i>
                                <span class="link_name">Inventario</span>
                            </a>
                            <i class='bx bxs-chevron-down arrow'></i>
                        </div>
                        <ul class="sub-menu">
                            <li><a class="link_name" href="#">Inventario</a></li>
                            <li><a href="#">Option</a></li>
                            <li><a href="#">Option</a></li>
                            <li><a href="#">Option</a></li>
                        </ul>
                    </li>
                    <li>
                        <div class="iocn-link">
                            <a href="#">
                                <i class='bx bx-book-alt'></i>
                                <span class="link_name">Facturación</span>
                            </a>
                            <i class='bx bxs-chevron-down arrow'></i>
                        </div>
                        <ul class="sub-menu">
                            <li><a class="link_name" href="#">Facturación</a></li>
                            <li><a href="#">Option</a></li>
                            <li><a href="#">Option</a></li>
                            <li><a href="#">Option</a></li>
                        </ul>
                    </li>
                    <?php if ($nombre_rol == 'administrador' || $nombre_rol == 'gerente'): ?>
                        <li>
                            <div class="iocn-link">
                                <a href="#">
                                    <i class="bx bxs-user-account"></i>
                                    <span class="link_name">Usuarios</span>
                                </a>
                                <i class="bx bxs-chevron-down arrow"></i>
                            </div>
                            <ul class="sub-menu">
                                <li><a class="link_name" href="#">Usuarios</a></li>
                                <li><a href="#" onclick="verModulo('users_VI/agregarUsers');">Registrar</a></li>
                        </li>
                    </ul>
                    </li>
                <?php endif; ?>
                <li>
                    <div class="profile-details">
                        <div class="profile-content" onclick="salir()">
                            <i id="logout" class='bx bx-log-out'></i>
                            <div class="name-job">
                                <div class="job">Cerrar Sesión</div>
                            </div>
                        </div>
                    </div>
                </li>
                </ul>
            </div>
            <section class="home-section">
                <div class="home-content">
                    <i class='bx bx-menu'></i>
                    <span class="text"></span>
                </div>
                <div class="home-contentt" id="contenido">
                </div>
            </section>
            <script src="plugins/jquery.min.js"></script>
            <script src="dist/js/dashboard.js"></script>
            <script>
                var nombreRol = '<?php echo $nombre_rol; ?>';

                function verModulo(ruta) {
                    $.post(ruta, function (respuesta) {
                        $('#contenido').html(respuesta);
                    });
                }



                function salir() {
                    fetch('login_CO/salir', { method: 'POST' })
                        .then(function (response) {
                            location.href = "index.php";
                        });
                }
            </script>
        </body>

        </html>
        <?php
    }
}