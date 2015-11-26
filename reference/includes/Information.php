<?php

class Information 
{
    private $id;
    private $title;
    private $content;
    private $datePub;
    private $dateInfo;
    
    
    function getId() {
        return $this->id;
    }

    function getTitle() {
        return $this->title;
    }

    function getContent() {
        return $this->content;
    }

    function getDatePub() {
        return $this->datePub;
    }

    function getDateInfo() {
        return $this->dateInfo;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setTitle($title) {
        $this->title = $title;
    }

    function setContent($content) {
        $this->content = $content;
    }

    function setDatePub($datePub) {
        $this->datePub = $datePub;
    }

    function setDateInfo($dateInfo) {
        $this->dateInfo = $dateInfo;
    }



    
}
