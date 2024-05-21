<?php

require_once('./config.php');

class Employe
{
    private $nom;
    private $email;
    private $connexion;



    public function __construct($nom, $email, $connexion)
    {
        $this->nom = $nom;
        $this->email = $email;
        $this->connexion = $connexion;
    }

    public function getNom()
    {
        return $this->nom;
    }
    public function setNom($n_nom)
    {
        $this->nom = $n_nom;
    }

    public function getEmail()
    {
        return $this->email;
    }
    public function setEmail($n_email)
    {
        $this->email = $n_email;
    }

    /* Afficher la liste des employés*/

    public function read()
    {
        try {
            $sql = 'SELECT * FROM employe';
            $req = $this->connexion->prepare($sql);
            $req->execute();
            $employe = $req->fetchAll(PDO::FETCH_OBJ);

            return $employe;
        } catch (PDOException $erreur) {
            die('Erreur : ' . $erreur->getMessage());
        }
    }

    /* Ajouter un nouvel employé*/
    public function add($nom, $email)
    {
        try {
            $sql = 'INSERT INTO employe (nomComplet, email) VALUES (:nom, :email)';
            $req = $this->connexion->prepare($sql);
            $req->bindValue(':nom', $nom);
            $req->bindValue(':email', $email);
            $req->execute();

            header('location: index.php');
            exit();
        } catch (PDOException $erreur) {
            die('Erreur : ' . $erreur->getMessage());
        }
    }


    /* Mettre à jour un employé*/
    public function update($numero, $nom, $email)
    {
        if (isset($_GET['numero']) && !empty($_GET['numero'])) {
            $numero = $_GET['numero'];

            try {
                $sql = 'SELECT * FROM employe WHERE numero = :numero';
                $req = $this->connexion->prepare($sql);
                $req->bindValue(':numero', $numero, PDO::PARAM_INT);
                $req->execute();
                $membres = $req->fetch(PDO::FETCH_OBJ);
            } catch (PDOException $erreur) {
                die('Erreur : ' . $erreur->getMessage());
            }
        } else {
            echo "Identifiant d'employé non fourni";
        }

        if (isset($_POST['nom']) && isset($_POST['email'])) {
            $nom = $_POST['nom'];
            $email = $_POST['email'];

            try {
                $sql = 'UPDATE employe SET nomComplet=:nom, email=:email WHERE numero=:numero';
                $req = $this->connexion->prepare($sql);
                $req->bindValue(':nom', $nom);
                $req->bindValue(':email', $email);
                $req->bindValue(':numero', $numero, PDO::PARAM_INT);
                if ($req->execute()) {
                    header("location: index.php");
                    exit();
                }
            } catch (PDOException $erreur) {
                die('Erreur : ' . $erreur->getMessage());
            }
        }

        return $membres;
    }

    /* Suppression d'un employé*/
    public function delete($numero)
    {
        try {
            $numero = $_GET['numero'];

            $sql = 'DELETE FROM employe WHERE numero = :numero';
            $req = $this->connexion->prepare($sql);
            $req->bindValue(':numero', $numero, PDO::PARAM_INT);
            $req->execute();

            header("location: index.php");
            exit();
            
        } catch (PDOException $erreur) {
            die('Erreur : ' . $erreur->getMessage());
        }
    }
}
