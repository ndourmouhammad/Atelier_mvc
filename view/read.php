<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="./public/index.css">
    <title>Accueil - gestion des employés</title>
</head>
<body>
    <header>
        <div class="logo">
           
        </div>
        <nav>
            <a class="active" href="index.php">Accueil</a>
            <a class="active" href="index.php?page=insert-employe">Ajouter un employé</a>
        </nav>
    </header>
    <section class="liste">
        <h1>La liste des employés</h1>
        <table>
            <thead>
                <tr>
                    <th>Numéro</th>
                    <th>Nom complet</th>
                    <th>Adresse email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach ($employes as $employe) : ?>
                    <tr>
                        <td><?= $employe->numero ?></td>
                        <td><?= $employe->nomComplet ?> </td>
                        <td><?= $employe->email ?></td>
                        <td>
                        <a href="modifier-employe_<?= $employe->numero ?>.html" class="action-icon"><i class="fas fa-edit"></i></a>
                        <a onclick="return confirm('Confirmer la suppression')" href="supprimer-employe_<?= $employe->numero ?>.html" class="action-icon"><i class="fas fa-trash-alt"></i></a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </section>
</body>
</html>