<?php

if (!isset($_REQUEST['action'])) {
    $action = "seeConnexion";
}

else {
    $action = $_REQUEST['action'];
}

switch($action) {

    case "checkUser" :
        if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email'])&& isset($_POST['reenteremail'])&& isset($_POST['password'])&& isset($_POST['reenterpassword'])) 
        {
            $firstname = $_POST['firstname'];
            $lastname = $_POST['lastname'];
            $email = $_POST['email'];
            $reenteremail = $_POST['reenteremail'];
            $password = $_POST['password'];
            $reenterpassword = $_POST['reenterpassword'];
        }
        include "vues/v_connexion.php";
        break;
    
    default :
        include "vues/v_connexion.php";
        break;
}