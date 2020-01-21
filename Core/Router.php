<?php

class Router
{
    private static $routes = [];
    public static function connect($url, $route)
    {
        self::$routes[$url] = $route;
    }
    public static function get($url)
    {
        // retourne un tableau associatif contenant
        // + le controller a instancier
        // + la méthode du controller a appeler
        if (array_key_exists($url, self::$routes) === true) {
                return self::$routes[$url];
            } else {
            return null;
        }
    }
}
