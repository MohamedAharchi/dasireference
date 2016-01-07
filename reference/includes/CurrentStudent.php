<?php
require_once 'Connexion.php';
class CurrentStudent {

    private $id;
    private $login;
    private $password;
    private $name;
    private $lastname;
    private $mail;
    private $class;
    
    public function __construct(){
        
    }

    function getId() {
        return $this->id;
    }

    function getLogin() {
        return $this->login;
    }

    function getPassword() {
        return $this->password;
    }

    function getName() {
        return $this->name;
    }

    function getLastname() {
        return $this->lastname;
    }

    function getMail() {
        return $this->mail;
    }

    function getClass() {
        return $this->class;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setLogin($login) {
        $this->login = $login;
    }

    function setPassword($password) {
        $this->password = $password;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    function setMail($mail) {
        $this->mail = $mail;
    }

    function setClass($class) {
        $this->class = $class;
    }

    
    public function getStudent($login, $password) {
        try
        {
            $connexion = new connexion();
            $conn = $connexion->getConnexion();
            
            $sql = "select ID_CURRENTSTUDENT, LOGIN_CURRENTSTUDENT, PASSWORD_CURRENTSTUDENT, NAME_CURRENTSTUDENT, LASTNAME_CURRENTSTUDENT, MAIL_CURRENTSTUDENT, CLASS_CURRENTSTUDENT "
                    . "from CURRENTSTUDENT where LOGIN_CURRENTSTUDENT = ".$login." and PASSWORD_CURRENTSTUDENT = ".$password."";
            $req = $conn->query($sql);
            $req -> setFetchMode(PDO::FETCH_OBJ);
            return $req;
        }
        catch(PDOException $e)
        {
            $erreur = $e->getMessage();
        }
    }
    
    
}
