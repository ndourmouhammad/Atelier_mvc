<?php

require_once("./model/employe.class.php");

// Instanciation de la classe Employe

$nom = '';
$email = '';

$employe = new Employe($nom, $email, $connexion);

function afficherEmploye()
{
    global $employe;
    $employes = $employe->read();
    include_once('./view/read.php');
}

function ajouterEmploye($nom, $email){
    global $employe;

    $nom = $_POST['nom'];
    $email = $_POST['email'];

    $ajout = $employe->add($nom, $email);
    include_once('./view/add.php');
}

function modifierEmploye($numero, $nom, $email)
{
    global $employe;

    $modif = $employe->update($numero, $nom, $email);
    include_once('./view/update.php');
}

function supprimerEmploye($numero)
{
    global $employe;

    $supp = $employe->delete($numero);
}
