<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name = "author" content="JoePorthos">
    <meta name="description" content="Stand de confiseries du BDE">
    <meta name="keywords" content="bde, stand, confiseries, snack, boissons, iut, villetaneuse, iutv, université, paris, paris13, sorbonne, paris nord">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wolf BDE - IUT de Villetaneuse</title>
    <link rel="stylesheet" type="text/css" href="Content/css/principal.css">
    <link rel="stylesheet" type="text/css" href="Content/css/langue_site.css">
    <link rel="stylesheet" type="text/css" href="Content/css/footer.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>
<body>

     <!-- Entête de la page d'accueil-->
    <header class="accueil_header">
        <nav class="accueil_nav">
            <div class="contenu-menu">
              <a href="?controller=home&action=home"><img class="logo_bde" src="Content/img/logo_bde.png" alt="logo-bde" width="70px" height="70px"></a>
              <a href="?controller=list&action=snacks" title="Snacks" class="deco">Snacks</a>
              <a href="?controller=list&action=boissons" title="Boissons" class="deco">Boissons</a>
              <a href="?controller=auth&action=form_login" title="Mon Espace" class="deco">Mon Espace</a>
              <a href="?controller=auth&action=form_login" title="Se connecter / S'inscrire" class="deco">Se connecter / S'inscrire</a>
            </div>
        </nav>

        <div class="js">
            <div class="language-picker js-language-picker" data-trigger-class="btn btn--subtle">
              <form action="" class="language-picker__form">
                <label for="language-picker-select">Selectionnez votre langue</label>
                <select name="language-picker-select" id="language-picker-select">
                  <option lang="fr" value="francais" selected>Français</option>
                  <option lang="en" value="english" >English</option>
                </select>
              </form>
            </div>
        </div>
    </header>
    <!--Fin de l'entête de la page-->

    <!--Corps de la page-->
    <main>

