<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../Content/css/animate/animate.css">
<script src="../Content/js/wow/wow.js"></script>
<script>
    new WOW().init();
</script>

<?php require "view_begin.php"; ?>
<link rel="stylesheet" href="../Content/css/login.css">

<section class="profile-info-card">
    <!--
    <div class="se_connecter">
        <h1>Modifiez vos informations</h1>
    </div>-->

    <div class="row">
        <div class="col-md-1 mb-4"></div>
        <div class="col-md-10 mb-4 py-4">
            <p class="header-section">Mon profil</p>
        </div>
        <div class="col-md-1 mb-4"></div>
    </div>

    <div class="row">
        <div class="col-md-6 mb-4 py-4">
            <div class="d-flex justify-content-center">
                <a title="Profil" class="btn deco">
                    <!-- ceci est une image par defaut qui sera remplacée par la veritable photo de l'utilisateur -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="100" height="100" fill="currentColor" class="bi bi-person-circle white-icon" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                        <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                    </svg>
                </a>
            </div>
        </div>
        <div class="col-md-6 mb-4 py-4">
            <p>Nom Prénom</p>
            <p>Pseudo</p>
            <p>Mail</p>
            <p>Inscrit depuis le : 01/01/2000</p>
        </div>
    </div>

    <div class="row">
        <div class="col-md-4 mb-4"></div>
        <div class="col-md-4 mb-4">
            <div class="d-flex justify-content-end p-2">
                <input type="button" class="btn btn-md p_btn" value="Modifier mes informations">
            </div>
        </div>
        <div class="col-md-4 mb-4"></div>
    </div>

    <div class="row">
        <div class="col-md-1 mb-4"></div>
        <div class="col-md-10 mb-4 py-4">
            <p class="header-section">Mes dernières critiques</p>
        </div>
        <div class="col-md-1 mb-4"></div>
    </div>

    <!-- la classe carousel slide permet d'indiquer la creation du carrousel -->
    <div id="film-carousel" class="carousel slide" data-ride="carousel">

        <!-- la classe carousel-inner definit l'ensemble du carousel -->
        <div class="carousel-inner row mx-auto pg-card" style="padding: 50px 200px;">

            <!-- la class carousel-item designe le contenu d'une slide et active permets de d'indiquer la première slide affichée -->
            <div class="carousel-item active">
                    <!-- template du contenu du carrousel -->
                    <div class="row align-items-center">
                        <div class="col-md-6 mb-4 py-4">
                            <!-- Récuperer l'image du film en faisant une jointure entre la table film et critique -->
                            <div class="card mb-3 movie_list">
                                <div class="card rounded" style="width: 200px; height: 300px; position: relative;">
                                    <img src="../Content/img/Napoleon.jpg" class="card-img mx-auto d-block" alt="Card Image" style="object-fit: cover;">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 py-4 d-flex align-items-center">
                            <div>
                                <h1 style="text-align: center;">Nom du film</h1>
                                <p>[Date de la critique]</p>
                                <p>note</p>
                                <p>Commentaire</p>
                            </div>
                        </div>
                    </div>
            </div>
            <!-- contenu de la 2e slide -->
            <div class="carousel-item">
                    <div class="row align-items-center">
                        <div class="col-md-6 mb-4 py-4">
                            <!-- Récuperer l'image du film en faisant une jointure entre la table film et critique -->
                            <div class="card mb-3 movie_list">
                                <div class="card rounded" style="width: 200px; height: 300px; position: relative;">
                                    <img src="../Content/img/Napoleon.jpg" class="card-img mx-auto d-block" alt="Card Image" style="object-fit: cover;">
                                </div>
                            </div>
                        </div>

                        <div class="col-md-6 mb-4 py-4 d-flex align-items-center">
                            <div>
                                <h1 style="text-align: center;">Nom du film</h1>
                                <p>[Date de la critique]</p>
                                <p>note</p>
                                <p>Commentaire</p>
                            </div>
                        </div>

                    </div>
            </div>
            <!-- contenu de la 3e slide -->
            <div class="carousel-item">
                    <div class="row align-items-center">
                        <div class="col-md-6 mb-4 py-4">
                            <!-- Récuperer l'image du film en faisant une jointure entre la table film et critique -->
                            <div class="card mb-3 movie_list">
                                <div class="card rounded" style="width: 200px; height: 300px; position: relative;">
                                    <img src="../Content/img/Napoleon.jpg" class="card-img mx-auto d-block" alt="Card Image" style="object-fit: cover;">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 mb-4 py-4 d-flex align-items-center">
                            <div>
                                <h1 style="text-align: center;">Nom du film</h1>
                                <p>[Date de la critique]</p>
                                <p>note</p>
                                <p>Commentaire</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        <!--code permettant de generer les boutons suivant et precedent du carrousel -->
        <a class="carousel-control-prev" href="#film-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#film-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>

</br>

<?php require "view_end.php"; ?>
