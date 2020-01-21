<?php 

//    Module qui traite les actions de l'utilisateur, modifie les données du modèle et de la vue.

namespace Controller;
use \Core\Controller;

class AppController extends Controller {
    public function index(){

        $this->render("index"); // appel la méthode render de controller
    }
}
