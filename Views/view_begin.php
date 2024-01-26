<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="author" content="Space Ciné">
    <meta name="description" content="Space Ciné">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Space Ciné</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.17.0/font/bootstrap-icons.css">
    <link rel="stylesheet" type="text/css" href="../Content/css/principal.css">
    <link rel="stylesheet" type="text/css" href="../Content/css/langue_site.css">
    <link rel="stylesheet" type="text/css" href="../Content/css/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

<!-- Entête de la page d'accueil-->
<header class="accueil_header">
    <nav class="accueil_nav">
        <div class="contenu-menu">
            <a href="?controller=home&action=home"><img class="logo_sc" src="../Content/img/logo_SpaceCine.png" alt="logo-cs" width="70px" height="70px"></a>
            <a href="?controller=list&action=film" title="Films" class="deco">Film</a>
            <a href="?controller=list&action=actu" title="Actu" class="deco">Actu</a>
            <a href="?controller=auth&action=form_login" title="Forum" class="deco">Forum</a>
            <!-- Pour la variable de session -->
            <!--
            <a href="?controller=auth&action=form_logout" title="Profil" class="btn deco">
                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" fill="currentColor" class="bi bi-person-circle white-icon" viewBox="0 0 16 16">
                    <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                    <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                </svg>
            </a>
            -->
            <a href="?controller=auth&action=form_login" title="Se connecter / S'inscrire" class="deco">Se connecter / S'inscrire</a>
        </div>
    </nav>

    <div class="js">
        <div class="language-picker js-language-picker" data-trigger-class="btn btn--subtle">
            <form action="" class="language-picker__form">
                <label for="language-picker-select">Selectionnez votre langue</label>
                <select name="language-picker-select" id="language-picker-select">
                    <option lang="fr" value="francais" selected>Français</option>
                    <option lang="en" value="english">English</option>
                </select>
            </form>
        </div>
    </div>
</header>
<!-- Fin de l'entête de la page-->

<!-- Corps de la page-->
<main>
<!-- Reste du contenu de votre page -->