<?php 

//permet d’inclure automatiquement toutes les classes qui seront utilisées dans votre framework

spl_autoload_register(function ($className) {
 echo $className.'<br>';
    $path = str_replace("\\", "/", $className);
    if(strpos($className, "Core") !== false) { // strpos  Cherche la position de la première occurrence dans une chaîne
        require_once ("$path.php");
    } else if(strpos($className, "Controller") !== false) {
        require_once("src/$path.php");
    } else if(strpos($className, "Model") !== false) {
        require_once("src/$path.php");
    }  else {
        if(is_file("$path.php")) {
            echo "test";
            require_once("$path.php");

        }
    }
});
