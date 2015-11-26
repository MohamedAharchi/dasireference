<?php

if (!isset($_REQUEST['action'])) {
    $action = "seeHome";
}

else {
    $action = $_REQUEST['action'];
}

switch($action) {

    case "seeHome" :
        include "vues/v_home.php";
        break;
    
    default :
        include "vues/v_home.php";
        break;
}