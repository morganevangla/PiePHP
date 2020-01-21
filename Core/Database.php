<?php
namespace Core;


class Database {

        private static function connexion() {
        
            self::$bdd = new \PDO("mysql:host=localhost;dbname=piephp" , 'root', 'c?dBIOzh');
            self::$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
 }

 public static function getIsntance(){
     if(self::$bdd === null) {
         self::connexion();
     }
     return self::$bdd;
 }
 
}

?> 