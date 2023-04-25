<!DOCTYPE html>
<!-- Designined by CodingLab | www.youtube.com/codinglabyt -->
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <!-- Boxiocns CDN Link -->
  <link rel="mask-icon" type="image/x-icon" href="https://cpwebassets.codepen.io/assets/favicon/logo-pin-b4b4269c16397ad2f0f7a01bcdf513a1994f4c94b8af2f191c09eb0d601762b1.svg" color="#111">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="../css/usuario.css">
  
   </head>
<body>
    <div class="form-body">
        <div class="row">
            <div class="form-holder">
                <div class="form-content">
                    <div class="form-items">
                        <h3>Registrar Usuario</h3>
                        <form id="formulario-container" class="requires-validation" novalidate="" method="POST" action="">

                            <div class="col-md-12">
                               <input class="form-control" type="text" name="nombres" placeholder="Nombres" required="">
                               <div class="valid-feedback">¡El campo de nombres es válido!</div>
                               <div class="invalid-feedback">¡El campo de nombres no puede estar vacio!</div>
                            </div>

                            <div class="col-md-12">
                               <input class="form-control" type="text" name="apellidos" placeholder="Apellidos" required="">
                               <div class="valid-feedback">¡El campo de apellidos es válido!</div>
                               <div class="invalid-feedback">¡El campo de apellidos no puede estar vacio!</div>
                            </div>

                            <div class="col-md-12">
                               <input class="form-control" type="text" name="documento" placeholder="Documento" required="">
                               <div class="valid-feedback">¡El campo de documento es válido!</div>
                               <div class="invalid-feedback">¡El campo de documento no puede estar vacio!</div>
                            </div>

                            <div class="col-md-12">
                                <input class="form-control" type="email" name="email" placeholder="Correo Electronico" required="">
                                 <div class="valid-feedback">¡El campo de correo electronico es válido!</div>
                                 <div class="invalid-feedback">¡El campo de correo electronico no puede estar vacio!</div>
                            </div>

                            <div class="col-md-12">
                            <select class="form-select mt-3" required="" name="rol">
                            <option selected="" disabled="" value="">Rol</option>
                                      <?php
                                      $conexion=pg_connect("host=localhost dbname=newoutfit user=postgres password=123");
                                      $query="SELECT id_rol, nombre_rol FROM newoutfit.rol";
                                      $consulta=pg_query($conexion, $query);
                                      while($obj=pg_fetch_object($consulta)){?>
                                      <option value="<?php echo $obj->id_rol ?>"><?php echo $obj->nombre_rol;?></option>
                                      <?php
                                      }
                                      ?>
                               </select>
                            <div class="valid-feedback">¡Seleccionaste un rol!</div>
                            <div class="invalid-feedback">¡Debes seleccionar un rol!</div>
                            </div>

                            <div class="form-button mt-3">
                                <button id="submit" type="submit" class="btn btn-primary">Registrar</button>
                                <button id="reset" type="reset" class="btn btn-primary">Limpiar</button>
                            </div>

                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
  </section>
  <script src="https://cpwebassets.codepen.io/assets/common/stopExecutionOnTimeout-2c7831bb44f98c1391d6a4ffda0e1fd302503391ca806e7fcc7b9b87197aec26.js"></script>

<script id="rendered-js" src="../js/usuario.js"></script>
</body>
</html>
