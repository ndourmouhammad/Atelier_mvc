<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="./public/index.css">
    <title>Ajout - gestion des employés</title>
</head>
<body>
    <header>
        <div class="logo">
           
        </div>
        <nav>
            <a href="index.php">Accueil</a>
            <a class="active" href="index.php?page=insert-employe">Ajouter un employé</a>
        </nav>
    </header>

    <section class="liste">
        <h1>Insertion d'un nouvel employé</h1>
        <div class="form-container">
            <form action="" method="post">
                <div class="form-group">
                    <label for="nom">Nom complet</label>
                    <input type="text" id="nom" name="nom" placeholder="Entrez votre nom complet">
                </div>
                <div class="form-group">
                    <label for="email">Adresse email</label>
                    <input type="email" id="email" name="email" placeholder="Entrez votre adresse email">
                </div>
                <button type="submit">Ajouter</button>
            </form>
        </div>
    </section>
</body>
</html>