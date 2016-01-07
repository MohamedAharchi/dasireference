<?php
$dsn = 'mysql:dbname=p1515802;host=https://iutdoua-webetu.univ-lyon1.fr/phpMyAdmin';
$user = 'p1515802';
$password = '251434';

try {
    $dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
    echo 'Connexion échouée : ' . $e->getMessage();
}

