<?php

class ChatMessage 
{
    private $id;
    private $message;
    private $dateHeure;
    
    function getId() {
        return $this->id;
    }

    function getMessage() {
        return $this->message;
    }

    function getDateHeure() {
        return $this->dateHeure;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setMessage($message) {
        $this->message = $message;
    }

    function setDateHeure($dateHeure) {
        $this->dateHeure = $dateHeure;
    }


    
}
