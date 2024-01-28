<?php require "view_begin.php";?>


    <!DOCTYPE html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="Content/css/animate/animate.css">
        <script src="Content/js/wow/wow.js"></script>
        <script>
            new WOW().init();
        </script>

        <title>Films</title>
    </head>
    <br>

    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center"><?= e($data["Titre"]) ?></h1>
                <!-- Star Rating -->
                <div class="text-center">
                    <span class="text-warning" style="font-size: 2em;">&#9733;</span>
                    <span class="text-warning" style="font-size: 2em;">&#9733;</span>
                    <span class="text-warning" style="font-size: 2em;">&#9733;</span>
                    <span class="text-warning" style="font-size: 2em;">&#9733;</span>
                    <span class="text-secondary" style="font-size: 2em;">&#9733;</span>
                </div>
            </div>
        </div>
    </div>
    <section class="wow bounceInUp">
        <div class="container mt-5">
            <div class="row">
                <div class="col-md-3">
                    <div class="card rounded" style="width: 200px; height: 300px;">
                        <img src="<?= e($data["Affiche"]) ?>" class="card-img" alt="<?= e($data["Titre"]) ?>">
                    </div>
                </div>
                <div class="col-md-6 mx-auto">
                    <div class="row">
                        <div class="col">
                            <p> <?= e(date('d F Y',strtotime($data["DateSortie"]))) ?> | <?= e($data["DureeFilm"]) ?> | <?= e($data["GenreFilm"]) ?></p>
                            <p>De Norman Thavaud</p>
                            <p>Avec Norman Thavaud, Mallory Wanecque, Julia Piaton</p>
                            <h1>Synopsis</h1>
                            <p><?= e($data["Synopsis"]) ?></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="container mt-4">
                        <h2 class="text-center mb-4">Casting</h2>

                        <div class="row">
                            <div class="col-6">
                                <div class="card" style="width: 120px; height: 120px;">
                                    <img src="Content/img/acteurs/Kemar.png" alt="Image 1" class="card-img-top img-fluid rounded" style="width: 120px; height: 120px;">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card" style="width: 120px; height: 120px;">
                                    <img src="../Content/img/acteurs/Kemar.png" alt="Image 2" class="card-img-top img-fluid rounded" style="width: 120px; height: 120px;">
                                </div>
                            </div>
                        </div>

                        <div class="row mt-3">
                            <div class="col-6">
                                <div class="card" style="width: 120px; height: 120px;">
                                    <img src="../Content/img/acteurs/Kemar.png" alt="Image 3" class="card-img-top img-fluid rounded" style="width: 120px; height: 120px;">
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="card" style="width: 120px; height: 120px;">
                                    <img src="../Content/img/acteurs/Kemar.png" alt="Image 4" class="card-img-top img-fluid rounded" style="width: 120px; height: 120px;">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </br>

        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="text-center">Bande annonce</h1>
                </div>
            </div>
        </div>

        <div class="container mt-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <!-- Utilisez la classe "rounded" de Bootstrap pour les coins arrondis -->
                    <iframe width="560" height="315" src="<?= e($data["BandeAnnonce"]) ?>>" frameborder="0" allowfullscreen class="mx-auto d-block rounded"></iframe>
                </div>
            </div>
        </div>

        </br>

        <div class="container">
            <div class="row">
                <div class="col">
                    <h1 class="text-center">Section commentaire</h1>
                </div>
            </div>
        </div>

    </section>

    </html>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?php require "view_end.php";?>