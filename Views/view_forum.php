<?php require "view_begin.php"; ?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Space Ciné Forum</title>
    <link rel="stylesheet" href="../SAE/Content/css/forum.css">
    <!-- Ajouter d'autres liens vers des feuilles de style selon tes besoins -->
</head>

<body>

<div class="bienvenue-section">
    <p>
        Bienvenue sur Space Ciné, le lieu idéal pour discuter de vos films préférés !
    </p>
</div>


<!-- Formulaire de recherche -->
<form action="recherche.php" method="get" class="search-form">
    <input type="text" name="mots_cles" placeholder="Rechercher un forum de discussion....">
    <button type="submit">Rechercher</button>
</form>



<div class="row">
    <div class="col-md-2 mb-4"></div>
    <div class="col-md-8 mb-4">
        <div class="forum-section">
            <div class="general-mv">
                Types de films
            </div>
            <ul>
                <li><a href="?controller=home&action=all_forum.php">Action</a></li>
                <li><a href="?controller=home&action=all_forum.php">Aventure</a></li>
                <li><a href="?controller=home&action=all_forum.php">Comédie</a></li>
                <li><a href="?controller=home&action=all_forum.php">Classique</a></li>
                <li><a href="?controller=home&action=all_forum.php">Horreur</a></li>
                <li><a href="?controller=home&action=all_forum.php">Fantastique</a></li>
                <li><a href="?controller=home&action=all_forum.php">Romance</a></li>
                <li><a href="?controller=home&action=all_forum.php">Science Fiction</a></li>
            </ul>
        </div>
    </div>
    <div class="col-md-2 mb-4"></div>
</div>

</body>

</html>


<?php require "view_end.php"; ?>


