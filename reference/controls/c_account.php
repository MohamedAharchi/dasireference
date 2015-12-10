<?php

if (!isset($_REQUEST['action'])) {
    $action = "seeAccount";
}

else {
    $action = $_REQUEST['action'];
}

switch($action) {

    case "seeAccount" :
        include "vues/v_account.php";
        break;
    
    default :
        include "vues/v_account.php";
        break;
}