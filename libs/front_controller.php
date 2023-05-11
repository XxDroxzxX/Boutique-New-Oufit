<?php
class front_controller
{

    function __construct($ruta)
    {

        if (empty($ruta)) {

            require_once "views/dashboard_VI.php";

            $dashboard_VI = new dashboard_VI();

            $dashboard_VI->verDashboard();

        } else {

            list($clase, $metodo) = explode('/', $ruta);

            $sufijo = substr($clase, -2);

            if ($sufijo == 'VI') {

                $carpeta = 'views';

            } else if ($sufijo == 'CO') {

                $carpeta = 'controllers';

            } else {

                exit('ERROR: sufijo no enviado');
            }

            require_once $carpeta . "/" . $clase . ".php";

            $instancia = new $clase();

            $instancia->$metodo();
        }

    }
}
?>