<?php

if (!isset($_REQUEST['action'])) {
    $action = "seeLink";
}

else {
    $action = $_REQUEST['action'];
}

switch($action) {

    case "seeLink" :
        include "vues/v_usefulLink.php";
        break;
    
    default :
        include "vues/v_usefulLink.php";
        break;
}