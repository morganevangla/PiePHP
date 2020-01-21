<?php

//Un contrôleur (Controller) contient la logique concernant les actions effectuées par l'utilisateur.

namespace Controller;

use \Core\Controller;
use \Model\UserModel;



class UserController extends Controller
{ 



    public function index(){
        $this->render("index");
    }

    public function register(){

            if (isset($_POST['email']) && isset($_POST['password'])) {
                $insert_into = new UserModel($_POST['email'], $_POST['password']);
                $insert_into->save();
                $this->render("index");
            
            }

            else {
                $this->render("register");
            }
        }
      
    

}

?>
