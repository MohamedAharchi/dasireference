<?php

class Document 
{
    private $id;
    private $title;
    private $date;
    

    function getId() {
        return $this->id;
    }

    function getTitle() {
        return $this->title;
    }

    function getDate() {
        return $this->date;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function setDate($date) {
        $this->date = $date;
    }



    
}
