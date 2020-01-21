<?php
namespace Core;

class Controller
{

    public static $_render;

    protected function render($view, $scope = [])
    {
        extract($scope);
        $name = basename(get_class($this));
        $f = "src/View/". substr($name, strlen("Controller\\"), - strlen("Controller")). "/$view.php";
        $f = str_replace("\\", "", $f);
        if (file_exists($f)) {
            ob_start();

            include($f);
            $view = ob_get_clean();
            ob_start();
            include(implode(DIRECTORY_SEPARATOR, [dirname(__DIR__), 'src', 'View',
                'index']) . '.php');
            self::$_render = ob_get_clean();
        }
    }

    public function getRender()
    {
        return self::$_render;
    }


}
