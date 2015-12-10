<?php

if (!isset($_REQUEST['action'])) {
    $action = "seeHomework";
}

else {
    $action = $_REQUEST['action'];
}

switch($action) {

    case "seeHomework" :
        include "vues/v_homework.php";
        break;
    
    default :
        include "vues/v_homework.php";
        break;
}