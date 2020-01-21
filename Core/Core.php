<?php
//c'est la base de tous les éléments de l'appli c'est son coeur 

namespace Core;


class Core
{
    public function run()
    {
        require_once("src/routes.php");
        $route = \Router::get(URI);
        if ($route !== null) {
            $className = "Controller\\" . $route["controller"];
            $controller = new $className;
            $controller->{$route["action"]}(); // on appel la méthode du controller
                echo( $controller::$_render);
        } else {
            echo "ERROR 404 : Cannot get " . URI;
        }
    }
}
?>