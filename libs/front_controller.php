<?php

class front_controller
{
    public function __construct($ruta)
    {
        if (empty($ruta)) {
            $this->loadDashboard();
        } else {
            $rutaArray = explode('/', $ruta);

            if (count($rutaArray) == 2) {
                $clase = $rutaArray[0];
                $metodo = $rutaArray[1];
                $sufijo = substr($clase, -3);

                switch ($sufijo) {
                    case '_VI':
                        $carpeta = 'views';
                        break;
                    case '_CO':
                        $carpeta = 'controllers';
                        break;
                    default:
                        exit('ERROR: sufijo no válido');
                }

                $this->loadClass($carpeta, $clase, $metodo);
            } else {
                exit('ERROR: Ruta inválida');
            }
        }
    }



    private function loadDashboard()
    {
        require_once "views/dashboard_VI.php";
        $dashboard_VI = new dashboard_VI();
        $dashboard_VI->verDashboard();
    }

    private function loadClass($carpeta, $clase, $metodo)
    {
        require_once "$carpeta/$clase.php";

        if (class_exists($clase)) {
            $instancia = new $clase();

            if (method_exists($instancia, $metodo)) {
                $instancia->$metodo();
            } else {
                exit("ERROR: El método $metodo no existe en la clase $clase");
            }
        } else {
            exit("ERROR: La clase $clase no existe");
        }
    }
}

?>