<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="../Content/css/animate/animate.css">
<script src="../Content/js/wow/wow.js"></script>
<script>
    new WOW().init();
</script>

<section class="films-section">
    <p class="header-section">Films à la une </p>
    <div id="film-carousel" class="carousel slide  wow bounceInUp" data-ride="carousel">
        <div class="carousel-inner row mx-auto pg-card" style="padding: 50px 200px;">
            <?php for ($i = 0; $i < 8; $i += 4) { ?>
                <div class="carousel-item <?php echo ($i === 0) ? 'active' : ''; ?>">
                    <div class="row">
                        <?php for ($j = 0; $j < 4; $j++) { ?>
                            <?php if ($i + $j < 8) { ?>
                                <div class="col-lg-3 col-md-6 col-12">
                                    <div class="card mb-3 movie_list">
                                        <div class="card rounded" style="width: 200px; height: 300px; position: relative;">
                                            <img src="../Content/img/Napoleon.jpg" class="card-img mx-auto d-block" alt="Card Image" style="object-fit: cover;">
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        <?php } ?>
                    </div>
                </div>
            <?php } ?>
        </div>
        <a class="carousel-control-prev" href="#film-carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#film-carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
        <!-- Indicateurs -->
        <ol class="carousel-indicators">
            <?php for ($i = 0; $i < 2; $i++) { ?>
                <li data-target="#film-carousel" data-slide-to="<?php echo $i; ?>" <?php echo ($i === 0) ? 'class="active"' : ''; ?>></li>
            <?php } ?>
        </ol>
    </div>
</section>


