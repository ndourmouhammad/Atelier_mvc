<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="./public/index.css">
    <title>Mise à jour - gestion des employés</title>
</head>
<body>
    <header>
        <div class="logo">
           
        </div>
        <nav>
            <a href="index.php">Accueil</a>
            <a class="active" href="insert-employe.html">Ajouter un employé</a>
        </nav>
    </header>

    <section class="liste">
        <h1>Mise à jour de l'employé</h1>
        <div class="form-container">
            <form action="" method="post">
                <div class="form-group">
                    <label for="nom">Nom complet</label>
                    <input type="text" id="nom" name="nom" placeholder="Entrez votre nom complet" value="<?= $modif->nomComplet ?>">
                </div>
                <div class="form-group">
                    <label for="email">Adresse email</label>
                    <input type="email" id="email" name="email" placeholder="Entrez votre adresse email" value="<?= $modif->email ?>">
                </div>
                <button type="submit">Modifier</button>
            </form>
        </div>
    </section>
</body>
</html>