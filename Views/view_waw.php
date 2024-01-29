<?php require "view_begin.php"; ?>

<script src="../Content/js/wow/wow.js"></script>
<script>
    window.onload = function() {
        new WOW().init();
    };
</script>


<div class="row">
    <div class="col-md-1 mb-4">
    </div>
    <div class="col-md-10 mb-4 py-4">
        <p class="header-section">Qui sommes-nous ?</p>
    </div>
    <div class="col-md-1 mb-4">
    </div>
</div>
<div class="wow bounceInUp">

    <div class="row">
        <div class="col-md-2 mb-4">
        </div>
        <div class="col-md-8 mb-4 py-4">
            <p>Chez SpaceCiné, notre passion pour le cinéma nous unit, et notre équipe dévouée travaille ardemment pour créer une plateforme immersive et dynamique où les fans du septième art peuvent se connecter, partager et célébrer leur amour commun pour le cinéma. Chez SpaceCiné, chaque membre de l'équipe contribue à faire de ce site une destination incontournable pour tous les passionnés de cinéma. Que vous soyez un cinéaste en herbe, un fan curieux ou un expert chevronné, nous vous invitons à rejoindre notre communauté et à partager la magie du cinéma avec nous. Ensemble, créons des souvenirs cinématographiques inoubliables et célébrons l'art qui nous passionne tant. Bienvenue à bord de SpaceCiné, où l'aventure cinématographique prend vie !</p>
        </div>
        <div class="col-md-2 mb-4">
        </div>
    </div>

</div>

<div class="row">

    <div class="col-md-1 mb-4">
    </div>
    <div class="col-md-10 mb-4 py-4">
        <p class="header-section">Notre équipe</p>
    </div>
    <div class="col-md-1 mb-4">
    </div>
</div>

<style>
    .team-member-img {
        width: 200px;
        height: 200px;
        object-fit: cover;
    }

    .card {
        width: 200px;
    }

    .card-title {
        white-space: nowrap;
        overflow: hidden;
        text-overflow: ellipsis;
    }

    .card-body {
        display: flex;
        flex-direction: column;
        align-items: center;
    }
</style>

<!-- Team members section with Bootstrap -->
<div class="container py-3 wow bounceInUp">
    <div class="row">

        <div class="col-md-1 mb-4">
        </div>
        <!-- Team member 1 -->
        <div class="col-md-2 mb-4 px-0">
            <div class="card text-center movie_list py-0">
                <img src="/SAE/Content/img/acteurs/nayannou.png" class="card-img-top team-member-img" alt="Team Member 1">
                <div class="card-body">
                    <h6 class="card-title">ANDRIAMISA Nayann</h6>
                </div>
            </div>
        </div>

        <!-- Team member 2 -->
        <div class="col-md-2 mb-4 px-0">
            <div class="card text-center movie_list py-0">
                <img src="/SAE/Content/img/acteurs/clt.png" class="card-img-top team-member-img" alt="Team Member 2">
                <div class="card-body">
                    <h6 class="card-title">AUBER Cléante</h6>
                </div>
            </div>
        </div>

        <!-- Team member 3 -->
        <div class="col-md-2 mb-4 px-0">
            <div class="card text-center movie_list py-0">
                <img src="/SAE/Content/img/acteurs/Varun.jpeg" class="card-img-top team-member-img" alt="Team Member 3">
                <div class="card-body">
                    <h6 class="card-title">GUPTA Varun Vedic</h6>
                </div>
            </div>
        </div>

        <!-- Team member 4 -->
        <div class="col-md-2 mb-4 px-0">
            <div class="card text-center movie_list py-0">
                <img src="/SAE/Content/img/acteurs/faty.png" class="card-img-top team-member-img" alt="Team Member 4">
                <div class="card-body">
                    <h6 class="card-title">LO Faty</h6>
                </div>
            </div>
        </div>

        <!-- Team member 5 -->
        <div class="col-md-2 mb-4">
            <div class="card text-center movie_list py-0">
                <img src="/SAE/Content/img/acteurs/Jeff.png" class="card-img-top team-member-img" alt="Team Member 5">
                <div class="card-body">
                    <h6 class="card-title">PAILLOT Jefferson</h6>
                </div>
            </div>
        </div>

        <div class="col-md-1 mb-4">
        </div>
    </div>
</div>

<?php require "view_end.php"; ?>


