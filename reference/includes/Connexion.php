<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Functions
 *
 * @author MOHAMED
 */
class connexion {
    
    private $serveur='mysql:host=http://iutdoua-webetu.univ-lyon1.fr/phpMyAdmin';
    private $bdd='dbname=p1515802';   		
    private $user='p1515802';    		
    private $mdp='251434';
    private $maConex;
    
    public function __construct() {
        $this->maConex = new PDO($this->serveur.';'.$this->bdd, $this->user, $this->mdp); 
    }
    
    public function getConnexion() {
        return $this->maConex;
    }
}
