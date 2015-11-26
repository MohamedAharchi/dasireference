<?php


class Homework 
{
    private $id;
    private $discipline;
    private $date;
    private $subject;

    function getId() {
        return $this->id;
    }

    function getDiscipline() {
        return $this->discipline;
    }

    function getDate() {
        return $this->date;
    }

    function getSubject() {
        return $this->subject;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setDiscipline($discipline) {
        $this->discipline = $discipline;
    }

    function setDate($date) {
        $this->date = $date;
    }

    function setSubject($subject) {
        $this->subject = $subject;
    }


    


    
}