<?php
require_once 'includes/CurrentStudent.php';

$student = new CurrentStudent();

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
    
    case "passToHome" :
        include "vues/v_home.php";
        break;
    
    
    case "checkUser" :
        if(isset($_POST['loginname']) && isset($_POST['password'])) {
            $login = $_POST['loginname'];
            $password = $_POST['password'];
            $data = $student->getStudent($login, $password);
            
            echo $data->LOGIN_CURRENTSTUDENT;
            echo $date->PASSWORD_CURRENTSTUDENT;
        }
        break;
    
    case "disconnect" :
        session_destroy();
        header('Location: index.php');
        break;
    
    default :
        include "vues/v_connexion.php";
        break;
}