<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Section Commentaires</title>
</head>
<body>
<h1>Section Commentaires</h1>

<?php if (empty($getAllAvis)): ?>
    <p>Aucun commentaire disponible pour le moment.</p>
<?php else: ?>
    <ul>
        <?php foreach ($getAllAvis as $commentaire): ?>
            <li>
                <strong>Utilisateur:</strong> <?= htmlspecialchars($commentaire['UtilisateurID']); ?><br>
                <strong>Note:</strong> <?= htmlspecialchars($commentaire['Note']); ?><br>
                <strong>Commentaire:</strong> <?= htmlspecialchars($commentaire['Commentaire']); ?><br>
                <strong>Date de critique:</strong> <?= htmlspecialchars($commentaire['DateCritique']); ?>
            </li>
            <hr>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>



<!-- Vous pouvez ajouter un formulaire ici pour permettre aux utilisateurs d'ajouter un nouveau commentaire -->

<form action="/commentaires/ajouter" method="post">
    <!-- Ajoutez ici les champs nécessaires (utilisateur, note, commentaire, etc.) -->
    <button type="submit">Ajouter un commentaire</button>
</form>


</body>
</html>
