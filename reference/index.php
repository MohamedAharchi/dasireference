<?php
/* Start session */
session_start();
//require_once 'includes/Connexion.php';
//$connexion = new connexion();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <title>Dasi Reference</title>

        <!-- Bootstrap -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Stylesheet -->
        <link href="css/style.css" rel="stylesheet">

        <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->
    </head>
    <body>
    <?php
    /* Méthode MVC */
    /* Recuperation var of the control by url ($_GET or $_REQUEST)*/
    if (!isset($_REQUEST['uc'])) {
        /* if $_REQUEST['uc'] not exist, then uc = connexion */
        $uc = "connexion";
    }

    else {
        /* Else we stock controls value on a php var $uc */
        $uc = $_REQUEST['uc'];
    }

    switch($uc) {
        case "connexion" :
            include "controls/c_connexion.php";
            break;

        case "registration" :
            include "controls/c_registration.php";
            break;
        
        case "home" :
            include "controls/c_home.php";
            break;
        
        case "account" :
            include "controls/c_account.php";
            break;

        case "schedule" :
            include "controls/c_schedule.php";
            break;
        
        case "administration" :
            include "controls/c_admin.php";
            break;

        case "contact" :
            include "controls/c_contact.php";
            break;
        
        case "link" :
            include "controls/c_useFullLinks.php";
            break;

        case "homework" :
            include "controls/c_homework.php";
            break;
        
        case "lessons" :
            include "controls/c_lessons.php";
            break;
        
        case "contact" :
            include "controls/c_contact.php";
            break;
        
        default :
            include "controls/c_home.php";
            break;
    }
    ?>

        <!-- Call jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
        <!-- Call Bootstrap jQuery library -->
        <script src="js/bootstrap.min.js"></script>
        <script src="js/functions.js"></script>
    </body>
</html>
