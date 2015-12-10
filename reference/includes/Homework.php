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

    public function findAll() {
     $sql = "select * from HOMEWORK";
     $result = $this->getDb()->fetchAll($sql);
     // Converts query result to an array of domain objects
     $typeTravels = array();
     foreach ($result as $row) {
         $typeTravelId = $row['ID_HOMEWORK'];
         $typeTravels[$typeTravelId] = $this->buildDomainObject($row);
     }
     return $typeTravels;
    }
    


    
}