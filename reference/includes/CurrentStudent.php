<?php

class CurrentStudent {

    private $id;
    private $login;
    private $password;
    private $name;
    private $lastname;
    private $mail;
    private $class;

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


    
}
