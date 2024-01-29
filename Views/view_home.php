<link rel="stylesheet" href="Content/css/nuage.css">
<!-- views/view_home.php -->
<?php include("view_begin.php"); ?>

<!-- Section 1 : Bienvenue sur Space Ciné -->
<div class="bienvenue-section">
    <p>Bienvenue sur Space Ciné !</p>
</div>

<!-- Section 2 : Films à la une et Dernières sorties -->
<?php require "view_movie_list.php"; ?>

<!-- Section 3 : Actualités liées au cinéma -->
<section class="header-section">
    <p class="actualites">Actualités liées au cinéma</p>
    <div class="scrolling-container">
    <?php
    //foreach ($actualitesCinema as $actualite): ?>
        <!-- Afficher les détails des actualités -->
        <!--<div class="actualite"> -->
            <!--<h3><?php //echo $actualite["Titre"]; ?></h3>-->
            <!-- Ajoutez d'autres détails si nécessaire -->
        <!--</div> -->
    <?php //endforeach; ?>
    </div>
</section>
<div class="container">
    <div class="d-flex">
        <div class="nuage mx-6">Actualité 1</div>
        <div class="nuage mx-6">Actualité 2</div>
        <div class="nuage mx-6">Actualité 3</div>
        <div class="nuage mx-6">Actualité 4</div>
        <div class="nuage mx-6">Actualité 5</div>
    </div>
</div>
<!-- Section 4 : Bandes annonces de films -->
<section >
    <p class="header-section">Bandes annonces de films</p>
    <?php //foreach ($bandesAnnonces as $bandeAnnonce): ?>
        <!-- Afficher les détails des bandes annonces -->
        <!--<div class="bande-annonce"> -->
            <!--<h3><?php //echo $bandeAnnonce["Titre"]; ?></h3>-->
            <!-- Ajoutez d'autres détails si nécessaire -->
        <!--</div>-->
    <?php //endforeach; ?>
</section>

<?php include("view_end.php"); ?>
