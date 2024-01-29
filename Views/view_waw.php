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
            <p>Lorem ipsum dolor sit amet. Aut assumenda rerum sit distinctio ducimus non voluptas perspiciatis et voluptatibus quisquam est quidem expedita ut voluptatem omnis. Est quas neque aut sint quis sit dolor enim id laudantium dolorum et perferendis voluptas. Aut dolor mollitia ut earum facilis aut odit aliquid.

                Ut vero distinctio ut culpa recusandae ea quas consequatur est saepe assumenda vel neque impedit et sapiente sunt est nihil sapiente. Id autem nesciunt in aliquam repellat quo necessitatibus consequatur et dicta cumque qui consectetur dolores. Qui galisum odit aut sunt voluptatum ut voluptas deserunt eum ullam exercitationem non dolorem quod quo explicabo quibusdam. Aut enim temporibus ad quisquam consequatur sit blanditiis suscipit et veniam alias!</p>
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
                <img src="../Content/img/Kemar.png" class="card-img-top team-member-img" alt="Team Member 1">
                <div class="card-body">
                    <h6 class="card-title">ANDRIAMISA Nayann</h6>
                </div>
            </div>
        </div>

        <!-- Team member 2 -->
        <div class="col-md-2 mb-4 px-0">
            <div class="card text-center movie_list py-0">
                <img src="../Content/img/Kemar.png" class="card-img-top team-member-img" alt="Team Member 2">
                <div class="card-body">
                    <h6 class="card-title">AUBER Cléante</h6>
                </div>
            </div>
        </div>

        <!-- Team member 3 -->
        <div class="col-md-2 mb-4 px-0">
            <div class="card text-center movie_list py-0">
                <img src="../Content/img/Kemar.png" class="card-img-top team-member-img" alt="Team Member 3">
                <div class="card-body">
                    <h6 class="card-title">GUPTA Varun Vedic</h6>
                </div>
            </div>
        </div>

        <!-- Team member 4 -->
        <div class="col-md-2 mb-4 px-0">
            <div class="card text-center movie_list py-0">
                <img src="../Content/img/Kemar.png" class="card-img-top team-member-img" alt="Team Member 4">
                <div class="card-body">
                    <h6 class="card-title">LO Faty</h6>
                </div>
            </div>
        </div>

        <!-- Team member 5 -->
        <div class="col-md-2 mb-4">
            <div class="card text-center movie_list py-0">
                <img src="../Content/img/Kemar.png" class="card-img-top team-member-img" alt="Team Member 5">
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


