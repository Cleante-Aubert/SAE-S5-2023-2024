<?php require "view_begin.php"; ?>
<link rel="stylesheet" href="../Content/css/login.css">

<section class="grey-bg-card">
    <!--
    <div class="se_connecter">
        <h1>Modifiez vos informations</h1>
    </div>-->

    <div class="row">
        <div class="col-md-1 mb-4"></div>
        <div class="col-md-10 mb-4 py-4">
            <p class="header-section">Mes informations de profil</p>
        </div>
        <div class="col-md-1 mb-4"></div>
    </div>

    <div class="formulaire">
        <!-- nom de l'action à redefinir dans le back -->
        <form action="?controller=set&action=update_user" method="post">

            <div class="form-group">
                <label class="p-label" for="updateFirstName">Photo de profile</label>

                <div class="d-flex justify-content-center">
                    <a title="Profil" class="btn deco">
                        <!-- ceci est une image par defaut qui sera remplacée par la veritable photo de l'utilisateur -->
                        <svg xmlns="http://www.w3.org/2000/svg" width="250" height="250" fill="currentColor" class="bi bi-person-circle white-icon" viewBox="0 0 16 16">
                            <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0"/>
                            <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8m8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1"/>
                        </svg>
                    </a>
                </div>

                <!-- Importer la dropzone ici -->

            </div>

            <div class="form-group">
                <label class="p-label" for="updateLastName">Nom</label>
                <input type="text" name="NomUtilisateur" id="updateLastName" maxlength="60" value="" class="form-control input-lg">
                <!-- value doit etre prérempli par la variable du prenom de l'uilisateur -->
            </div>

            <div class="form-group">
                <label class="p-label" for="updateFirstName">Prénom</label>
                <input type="text" name="PrenomUtilisateur" id="updateFirstName" maxlength="60" value="" class="form-control input-lg">
                <!-- value doit etre prérempli par la variable du prenom de l'uilisateur -->
            </div>

            <div class="form-group">
                <label class="p-label" for="updateNickName">Pseudo</label>
                <input type="text" name="PseudoUtilisateur" id="updateNickName" maxlength="60" value="" class="form-control input-lg">
                <!-- value doit etre prérempli par la variable du pseudo de l'utilisateur -->
            </div>

            <div class="form-group">
                <label class="p-label" for="updateEmail">Adresse mail</label>
                <input type="email" name="Email" id="updateEmail" maxlength="60" value="" class="form-control input-lg">
                <!-- value doit etre prérempli par la variable du pseudo de l'email -->
            </div>

            <div class="form-group">
                <label class="p-label" for="PassWord">Mot de passe actuel</label>
                <input type="password" name="MotDePasse" id="PassWord" maxlength="60" value="" class="form-control input-lg">
            </div>

            <div class="form-group">
                <label class="p-label" for="updatePassWord">Nouveau mot de passe </label>
                <input type="password" name="MotDePasse" id="updatePassWord" maxlength="60" value="" class="form-control input-lg">
            </div>

            <div class="form-group">
                <label class="p-label" for="confirmPassWord">Confirmer le mot de passe</label>
                <input type="password" name="MotDePasse" id="confirmPassWord" maxlength="60" value="" class="form-control input-lg">
            </div>
            <div class="d-flex justify-content-end p-2">
                <input type="submit" class="btn btn-md p_btn" value="Modifier mes informations">
            </div>
            <div class="d-flex justify-content-end p-2">
                <input type="button" class="btn btn-md p_btn" value="Revenir sur la page de mon profil">
            </div>
        </form>
    </div>
</section>
</br>
</main>

<?php require "view_end.php"; ?>
