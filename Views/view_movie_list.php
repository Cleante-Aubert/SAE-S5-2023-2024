<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="Content/css/animate/animate.css">
<script src="Content/js/wow/wow.js"></script>
<script>
    new WOW().init();
</script>

<style>
    .movie_list {
        height: 300px; /* Ajustez la hauteur souhaitée */
    }

    .card-img {
        height: 100%;
        object-fit: cover;
    }
</style>

<section class="films-section">
    <p class="header-section">Films à la une </p>

    <div id="film-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner row mx-auto pg-card" style="padding: 50px 200px;">

            <?php $i=0; foreach (array_chunk($data, 4, true) as $value) : ?>
                <div class="carousel-item <?php if($i ==0){echo "active";} ?>">
                    <div class="row">
                        <?php foreach ($value as $value2) : ?>
                            <div class="col-lg-3 col-md-6 col-12">
                                <div class="card mb-3 movie_list">
                                    <div class="card rounded" style="width: 100%; height: 100%; position: relative;">
                                        <a href="?controller=list&action=selection&film=<?= $value2['Titre'] ?>">
                                            <img src="<?= $value2["Affiche"] ?>" class="card-img mx-auto d-block img-fluid" alt="<?= $value2["Titre"] ?>" style="object-fit: cover; height: 300px;">
                                        </a>
                                    </div>
                                </div>
                                <h6 style="display: flex;justify-content: space-evenly"><?= e($value2['Titre']) ?></h6>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
                <?php $i++; endforeach; ?>

            <a class="carousel-control-prev" href="#film-carousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#film-carousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>

            <ol class="carousel-indicators">
                <li data-target="#film-carousel" data-slide-to="0" class="active"></li>
                <li data-target="#film-carousel" data-slide-to="1"></li>
            </ol>
        </div>
    </div>
</section>
