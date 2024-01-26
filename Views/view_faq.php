<?php require "view_begin.php"; ?>

<!-- Bootstrap CSS -->
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- Font Awesome CSS -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

<script src="../Content/js/wow/wow.js"></script>
<script>
    window.onload = function() {
        new WOW().init();
    };
</script>

<div class="row">
    <div class="col-md-1 mb-4"></div>
    <div class="col-md-10 mb-4 py-4">
        <p class="header-section">Foire aux questions</p>
    </div>
    <div class="col-md-1 mb-4"></div>
</div>

<div class="row">
    <div class="col-md-2 mb-4"></div>
    <div class="col-md-8 mb-4 py-4">
        <div class="row">
                <div id='faq' class="wow bounceInUp">
                    <ul id="faq-list">

                        <li>
                            <a data-toggle="collapse" class="question collapsed" href="#faq1" aria-expanded="false" style="font-size: 1.25rem;">Comment puis-je rejoindre la communauté de fans de cinéma sur votre site ?<i class="fas fa-chevron-down"></i></a>
                            <div id="faq1" class="collapse" data-parent="#faq-list" style="font-size: 1.25rem;">
                                <p style="text-align: justify; ">Pour rejoindre notre communauté, il vous suffit de créer un compte en cliquant sur le bouton "S'inscrire" en haut à droite de la page d'accueil. Remplissez les informations nécessaires, et vous serez prêt à participer aux discussions cinématographiques passionnantes. </p>
                            </div>
                        </li>

                        <li>
                            <a data-toggle="collapse" href="#faq2" class="question collapsed" aria-expanded="false" style="font-size: 1.25rem;">Comment puis-je partager mes critiques de films sur le site ?<i class="fas fa-chevron-down"></i></a>
                            <div id="faq2" class="collapse" data-parent="#faq-list" style="font-size: 1.25rem;">
                                <p>Pour partager vos critiques, connectez-vous à votre compte, allez sur la page dédiée aux critiques, puis cliquez sur "Poster une critique". Saisissez le titre du film, rédigez votre critique, attribuez une note et partagez vos réflexions avec la communauté.</p>
                            </div>
                        </li>

                        <li>
                            <a data-toggle="collapse" href="#faq3" class="question collapsed" aria-expanded="false" style="font-size: 1.25rem;">Est-ce que le site propose des événements en ligne pour les fans de cinéma ?<i class="fas fa-chevron-down"></i></a>
                            <div id="faq3" class="collapse" data-parent="#faq-list" style="font-size: 1.25rem;">
                                <p> Oui, nous organisons régulièrement des événements en ligne tels que des séances de visionnage en groupe, des débats en direct et des entrevues avec des professionnels de l'industrie cinématographique. Restez à l'affût des annonces sur notre page d'accueil et nos réseaux sociaux pour ne rien manquer !</p>
                            </div>
                        </li>

                        <li>
                            <a data-toggle="collapse" href="#faq4" class="question collapsed" aria-expanded="false" style="font-size: 1.25rem;">Comment puis-je trouver des personnes partageant les mêmes goûts cinématographiques que moi ?<i class="fas fa-chevron-down"></i></a>
                            <div id="faq4" class="collapse" data-parent="#faq-list" style="font-size: 1.25rem;">
                                <p>Utilisez notre fonction de recherche avancée pour trouver des utilisateurs partageant vos préférences cinématographiques. Vous pouvez filtrer les résultats en fonction des genres de films, des réalisateurs préférés, ou même des acteurs que vous adorez.
                                </p>
                            </div>
                        </li>

                        <li>
                            <a data-toggle="collapse" href="#faq5" class="question collapsed" aria-expanded="false" style="font-size: 1.25rem;">Y a-t-il des règles à suivre lors des discussions sur le site ?<i class="fas fa-chevron-down"></i></a>
                            <div id="faq5" class="collapse" data-parent="#faq-list" style="font-size: 1.25rem;">
                                <p>Oui, nous encourageons des discussions respectueuses et constructives. Évitez les spoilers sans avertissement, soyez courtois envers les autres membres, et n'hésitez pas à signaler tout comportement inapproprié. Consultez nos lignes directrices de la communauté pour plus d'informations.</p>
                            </div>
                        </li>

                        <li>
                            <a data-toggle="collapse" href="#faq6" class="question collapsed" aria-expanded="false" style="font-size: 1.25rem;">Comment puis-je suggérer l'ajout d'un nouveau forum ou d'une fonctionnalité sur le site ?<i class="fas fa-chevron-down"></i></a>
                            <div id="faq6" class="collapse" data-parent="#faq-list" style="font-size: 1.25rem;">
                                <p>Nous sommes toujours ouverts aux suggestions de la part de notre communauté ! Pour proposer l'ajout d'un nouveau forum ou d'une fonctionnalité, rendez-vous sur notre page "Contact" et utilisez le formulaire pour nous faire part de vos idées. Nous apprécions votre contribution à l'amélioration de notre site.</p>
                            </div>
                        </li>
                    </ul>
                </div>
        </div>
    </div>
    <div class="col-md-2 mb-4"></div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.0.8/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<?php require "view_end.php"; ?>
