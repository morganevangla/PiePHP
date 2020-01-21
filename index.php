<!-- <pre>
    <?php
    // define('BASE_URI', str_replace('\\', '/', substr(
    //     __DIR__,
    //     strlen($_SERVER['DOCUMENT_ROOT'])
    // )));
    print_r($_POST);
    print_r($_GET);
    print_r($_SERVER);
    ?>
</pre> -->

<?php
define("BASE_URI", "/PiePHP"); //define — Définit une constante, Les URI englobent les URL, les URN et d'autres moyens
// d'identifier une ressource.

//REQUEST_URI
define("URI", substr($_SERVER["REQUEST_URI"], strlen(BASE_URI))); //Donne l'URI complète de la ressource demandée dans la ligne de requête 
//HTTP.Dans l'exemple précédent, cela correspondait à « /index.html ».
// echo "<pre>";
// var_dump(URI);
// echo "</pre>";
require_once(implode(DIRECTORY_SEPARATOR, ['Core', 'autoload.php'])); // require_once est identique à require mis à part que PHP vérifie
//si le fichier a déjà été inclus, et si c'est le cas, ne l'inclut pas une deuxième fois. 
$app = new Core\Core(); //Si une chaîne de caractères contenant une classe est utilisée avec new, une nouvelle instance de cette classe sera créée
$app->run();
?>