<?php

require_once('./controller/employe.php');

if (isset($_GET['page'])) {
    if ($_GET['page'] == 'insert-employe') {
        if (empty($_POST['email']) || empty($_POST['nom'])) {
            include('view/add.php');
        } else {
            ajouterEmploye($nom, $email);
        }
    }elseif ($_GET['page'] == 'modifier-employe') {
        $numero = $_GET['numero'];
        modifierEmploye($numero, $nom, $email);
    }elseif ($_GET['page'] == 'supprimer-employe') {
        $numero = $_GET['numero'];
        supprimerEmploye($numero);
    }
} else {
    afficherEmploye();
}
