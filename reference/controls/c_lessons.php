<?php

if (!isset($_REQUEST['action'])) {
    $action = "seeLessons";
}

else {
    $action = $_REQUEST['action'];
}

switch($action) {

    case "seeLessons" :
        include "vues/v_lessons.php";
        break;
    
    default :
        include "vues/v_lessons.php";
        break;
}