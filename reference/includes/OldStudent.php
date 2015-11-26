<?php


class OldStudent 
{
    private $id;
    private $name;
    private $mail;
    private $promotion;
    private $job;
    private $experience;
    
    
    
    function getId() {
        return $this->id;
    }

    function getName() {
        return $this->name;
    }

    function getMail() {
        return $this->mail;
    }

    function getPromotion() {
        return $this->promotion;
    }

    function getJob() {
        return $this->job;
    }

    function getExperience() {
        return $this->experience;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setMail($mail) {
        $this->mail = $mail;
    }

    function setPromotion($promotion) {
        $this->promotion = $promotion;
    }

    function setJob($job) {
        $this->job = $job;
    }

    function setExperience($experience) {
        $this->experience = $experience;
    }



    
    
}