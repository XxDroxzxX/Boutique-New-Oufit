<?php
session_start();
if (isset($_SESSION['email'])) {
} else {
  header('Location: http://localhost/Boutique-New-Oufit/');
}
?>

<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Dashboard </title>
    <link rel="stylesheet" href="../css/dashboard.css">
    <!-- Boxiocns CDN Link -->
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
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
          <i class='bx bx-grid-alt' ></i>
          <span class="link_name">Dashboard</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Inicio</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-collection' ></i>
            <span class="link_name">Inventario</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Inventario</a></li>
          <li><a href="#">Cosa 1</a></li>
          <li><a href="#">Cosa 2</a></li>
          <li><a href="#">Cosa 3 por si acaso</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bx-book-alt' ></i>
            <span class="link_name">Facturación</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Facturación</a></li>
          <li><a href="#">Cosa 1</a></li>
          <li><a href="#">Cosa 2</a></li>
          <li><a href="#">Cosa 3 por si acaso</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-pie-chart-alt-2' ></i>
          <span class="link_name">Estadisticas</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Estadisticas</a></li>
        </ul>
      </li>
      <li>
        <div class="iocn-link">
          <a href="#">
            <i class='bx bxs-user-account'></i>
            <span class="link_name">Usuarios</span>
          </a>
          <i class='bx bxs-chevron-down arrow' ></i>
        </div>
        <ul class="sub-menu">
          <li><a class="link_name" href="#">Usuarios</a></li>
          <li><a href="#" id="register-link">Registrar</a></li>
          <li><a href="#">Cosa 2</a></li>
          <li><a href="#">Cosa 3 por si acaso</a></li>
        </ul>
      </li>
      <li>
        <a href="#">
          <i class='bx bx-history'></i>
          <span class="link_name">Historial</span>
        </a>
        <ul class="sub-menu blank">
          <li><a class="link_name" href="#">Historial</a></li>
        </ul>
      </li>
      <li>
    <div class="profile-details">
      <div class="profile-content">
        <img src="../img/profile.jpg" alt="profileImg">
      </div>
      <div class="name-job">
        <div class="profile_name">Manuel Ca</div>
        <div class="job">Scrum Master</div>
      </div>
      <i id="logout" class='bx bx-log-out' onclick="window.location.href='http://localhost/Boutique-New-Oufit/'"></i>
    </div>
  </li>
</ul>
  </div>
  <section class="home-section" >
    <div class="home-content">
      <i class='bx bx-menu' ></i>
      <span class="text"></span>
    </div>
  </section>

  <script src="../js/dashboard.js"></script>

</body>
</html>
