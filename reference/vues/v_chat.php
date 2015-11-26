<?php
$nom = $_POST['nom'];                    //On r�cup�re le pseudo et on le stocke dans une variable
$message = $_POST['message'];            //On fait de m�me avec le message
$ligne = $nom.' > '.$message.'<br>';     //Le message est cr�� 
$leFichier = file('v_messageChat.htm');             //On lit le fichier ac.htm et on stocke la r�ponse dans une variable (de type tableau)
array_unshift($leFichier, $ligne);       //On ajoute le texte calcul� dans la ligne pr�c�dente au d�but du tableau
file_put_contents('v_messageChat.htm', $leFichier); //On �crit le contenu du tableau $leFichier dans le fichier ac.htm
?>
