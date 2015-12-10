<?php

if (!isset($_REQUEST['action'])) {
    $action = "seeSchedule";
}

else {
    $action = $_REQUEST['action'];
}

switch($action) {

    case "seeSchedule" :
        include "vues/v_schedule.php";
        break;
    
    default :
        include "vues/v_schedule.php";
        break;
}