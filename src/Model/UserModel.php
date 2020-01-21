<?php
// Un modèle (Model) contient les données à afficher.
//ément qui contient les données ainsi que de la logique en rapport avec les données: validation, lecture et enregistrement3.
// Il peut, dans sa forme la plus simple, contenir uniquement une simple valeur, ou une structure de données plus complexe

namespace Model;

use Core\Database;

class UserModel extends Database
 {

    private $email;
    private $password;

    public function __construct($email, $password)
    {

        $this->email = $email;
        $this->password = $password;

    }
    public function setEmail($email)
    {
        $this->email = $email;
    }
    public function setPassword($password)
    {
        $this->password = $password;
    }
    public function getEmail()
    {
        return $this->email;
    }
    public function getPassword()
    {
        return $this->password;
    }

    public function save() {

        $connectdb = new Database();
        $connectdb->connexion();
        $sql = 'INSERT INTO users (email, password) VALUES (:email, :password)';
        $result_sql = $connectdb->prepare($sql);
        $result_sql->bindParam(':email', $this->email, PDO::PARAM_STR);
        $result_sql->bindParam(':password', $this->password, PDO::PARAM_STR);
        $result_sql->execute();
        $result_sql->closeCursor();
        $this->create($this->email, $this->password);
    }

}

?>
