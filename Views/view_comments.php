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

<?php if (empty($avis)): ?>
    <p>Aucun commentaire disponible pour le moment.</p>
<?php else: ?>
    <ul>
        <?php foreach ($avis as $commentaire): ?>
            <li><?= htmlspecialchars($commentaire['Commentaire']); ?></li>
        <?php endforeach; ?>
    </ul>
<?php endif; ?>

<!-- Vous pouvez ajouter un formulaire ici pour permettre aux utilisateurs d'ajouter un nouveau commentaire -->
</body>
</html>
<?php
