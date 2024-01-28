<style>
    .card {
        border-radius: 10px;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }

    .scrollable-section {
        max-height: 300px;
        overflow-x: auto; /* Défilement vertical */
        overflow-x: hidden; /* Masquer le défilement horizontal */
    }

    .rating {
        font-size: 2em;
        cursor: pointer;
    }

    .rating input {
        display: none;
    }

    .rating label {
        color: #777;
        margin: 0 5px;
    }

    .rating input:checked ~ label,
    .rating input:hover ~ label {
        color: #f90;
    }
</style>

<div class="row">
    <div class="col-md-3 mb-4"></div>
    <div class="col-md-6 mb-4 py-4">
        <section class="scrollable-section">
            <!-- Carte 1 -->

            </br>

                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title text-center">Richard</h2>
                            <div class="text-center">
                                <span class="text-warning" style="font-size: 2em;">&#9733;</span>
                                <span class="text-warning" style="font-size: 2em;">&#9733;</span>
                                <span class="text-warning" style="font-size: 2em;">&#9733;</span>
                                <span class="text-warning" style="font-size: 2em;">&#9733;</span>
                                <span class="text-secondary" style="font-size: 2em;">&#9733;</span>
                            </div>
                            <p class="card-text">Trop bien !!!!!</p>
                        </div>
                    </div>

                    </br>
            <!-- Carte 2 -->
                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title text-center">Richard</h2>
                            <div class="text-center">
                                <span class="text-warning" style="font-size: 2em;">&#9733;</span>
                                <span class="text-warning" style="font-size: 2em;">&#9733;</span>
                                <span class="text-warning" style="font-size: 2em;">&#9733;</span>
                                <span class="text-warning" style="font-size: 2em;">&#9733;</span>
                                <span class="text-secondary" style="font-size: 2em;">&#9733;</span>
                            </div>
                            <p class="card-text">Trop bien !!!!!</p>
                        </div>
                    </div>

            </br>

                    <div class="card">
                        <div class="card-body">
                            <h2 class="card-title text-center">Richard</h2>
                            <div class="text-center">
                                <span class="text-warning" style="font-size: 2em;">&#9733;</span>
                                <span class="text-warning" style="font-size: 2em;">&#9733;</span>
                                <span class="text-warning" style="font-size: 2em;">&#9733;</span>
                                <span class="text-warning" style="font-size: 2em;">&#9733;</span>
                                <span class="text-secondary" style="font-size: 2em;">&#9733;</span>
                            </div>
                            <p class="card-text">Trop bien !!!!!</p>
                        </div>
                    </div>
            </br>

        </section>
    </div>
    <div class="col-md-3 mb-4"></div>
</div>

</br>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 class="text-center">Laissez un commentaire</h1>
        </div>
    </div>
</div>

</br>

<div class="row">
    <div class="col-md-3 mb-4"></div>
    <div class="col-md-6 mb-4 py-4">

        <!-- Zone de notation -->
        <p>Note</p>
        <div class="rating mt-4">
            <input type="radio" name="note" id="star1" value="1"><label for="star1">&#9733;</label>
            <input type="radio" name="note" id="star2" value="2"><label for="star2">&#9733;</label>
            <input type="radio" name="note" id="star3" value="3"><label for="star3">&#9733;</label>
            <input type="radio" name="note" id="star4" value="4"><label for="star4">&#9733;</label>
            <input type="radio" name="note" id="star5" value="5"><label for="star5">&#9733;</label>
        </div>

        <div class="form-group mt-4">
            <label class="p-label" for="commentInput">Commentaire</label>
            <textarea name="commentaire" id="commentInput" class="form-control"></textarea>
        </div>

        <div class="d-flex justify-content-end p-2">
            <input type="submit" class="btn btn-md p_btn" value="Ajouter un commentaire">
        </div>
    </div>
    <div class="col-md-3 mb-4"></div>
</div>

