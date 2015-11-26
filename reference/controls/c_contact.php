<?php

if (!isset($_REQUEST['action'])) {
    $action = "seeContact";
}

else {
    $action = $_REQUEST['action'];
}

switch($action) {

    case "seeContact" :
        include "vues/v_contact.php";
        break;
    
    default :
        include "vues/v_contact.php";
        break;
}