<?php

if (!isset($_REQUEST['action'])) {
    $action = "seeConnexion";
}

else {
    $action = $_REQUEST['action'];
}

switch($action) {

    case "seeConnexion" :
        include "vues/v_connexion.php";
        break;
    
    default :
        include "vues/v_connexion.php";
        break;
}