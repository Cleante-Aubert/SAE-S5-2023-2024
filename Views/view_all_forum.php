<?php require "view_begin.php"; ?>

<link rel="stylesheet" href="../Content/css/forum.css">

<!DOCTYPE html>
<html lang="fr">
<body>
<div class="forum">
    <h1>Forum</h1>
    <div class="new-topic">
        <button>Nouveau sujet</button>
    </div>
    <div class="search">
        <input type="text" placeholder="Rechercher dans le forum">
        <button>Rechercher</button>
    </div>
</div>
<div></div>
<h1>Liste des sujets</h1>
<table class="all_forum_table_class">
    <thead>
    <tr>
        <th>Sujet</th>
        <th>Auteur</th>
        <th>NB</th>
        <th>Dernier message</th>
    </tr>
    </thead>
    <tbody>
    <tr class="all_forum_li_class">
        <td>
            <a href="view_all_forum.php">
                Arcane saison 2 bientôt
            </a>
        </td>
        <td class="auteur">Tupac</td>
        <td class="nb-messages">002</td>
        <td class="dernier-message">27/01/2024</td>
    </tr>
    <tr class="all_forum_li_class">
        <td>
            <a href="view_all_forum.php">
                Arcane saison 2 bientôt
            </a>
        </td>
        <td class="auteur">Tupac</td>
        <td class="nb-messages">002</td>
        <td class="dernier-message">27/01/2024</td>
    </tr>
    <tr class="all_forum_li_class">
        <td>
            <a href="view_all_forum.php">
                Arcane saison 2 bientôt
            </a>
        </td>
        <td class="auteur">Tupac</td>
        <td class="nb-messages">002</td>
        <td class="dernier-message">27/01/2024</td>
    </tr>
    <tr class="all_forum_li_class">
        <td>
            <a href="view_all_forum.php">
                Arcane saison 2 bientôt
            </a>
        </td>
        <td class="auteur">Tupac</td>
        <td class="nb-messages">002</td>
        <td class="dernier-message">27/01/2024</td>
    </tr>
    <tr class="all_forum_li_class">
        <td>
            <a href="view_all_forum.php">
                Arcane saison 2 bientôt
            </a>
        </td>
        <td class="auteur">Tupac</td>
        <td class="nb-messages">002</td>
        <td class="dernier-message">27/01/2024</td>
    </tr>
    </tbody>
</table>
<div class="new-topic-form">
    <h1 id="form-title">Nouveau sujet</h1>
    <form id="new-topic-form" action="#" method="post">
        <label for="subject-title" class="label-title">Saisir le titre du sujet:</label>
        <input type="text" id="subject-title" name="subject-title" placeholder="Titre du sujet" required>
        <label for="subject-body" class="label-body">Corps du sujet:</label>
        <textarea id="subject-body" name="subject-body" rows="6" placeholder="Saisir le corps du sujet" required></textarea>
        <button type="submit" class="post-btn" id="btn-post">POSTER</button>
    </form>
</div>


</body>
</html>

<?php require "view_end.php"; ?>
