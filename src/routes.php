<?php 
// route app
Router::connect('/', ['controller' => 'AppController', 'action' => 'index']);

//route register
Router::connect('/register', ['controller' => 'UserController', 'action' => 'register']);
// register ------> UserController------->  register()



Router::connect('/login', ['controller' => 'UserController', 'action' => 'login']);


?>