<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administration Alibobo</title>
    <link href="./assets/css/style.css" rel="stylesheet" />
</head>
<body>
    <header>

        <nav>
            <ul>
                <li><a href="index.php?page=accueil">Accueil</a></li>
                <li><a href="index.php?page=categoriesAdmin">Catégories</a></li>
                <li><a href="index.php?page=articlesAdmin">Articles</a></li>
                <li><a href="index.php?page=commandesAdmin">Commandes</a></li>
                <li><a href="index.php?page=clientsAdmin">Clients</a></li>
                <li><a href="index.php?page=logout">Logout</a></li>
            </ul>
        </nav>
        <?php
        if (isset($_SESSION['nom']) && isset($_SESSION['prenom'])) {
            echo "<p>Bonjour " . $_SESSION['prenom'] . " " . $_SESSION['nom'] . "</p>";
        }
        ?>
    </header>