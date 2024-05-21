<?php

try {
    define('DSN', 'mysql:host=localhost;dbname=gestion_employes;charset=utf8');
    define('USER', 'root');
    define('PASSWORD', '');

    $connexion = new PDO(DSN, USER, PASSWORD);
} catch (PDOException $erreur) {
    die('Erreur : '.$erreur->getMessage());
}