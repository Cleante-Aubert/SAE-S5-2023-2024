<?php require "view_begin.php"; ?>
<link rel="stylesheet" href="../Content/css/login.css">

<section class="grey-bg-card">
    <!--
    <div class="se_connecter">
        <h1>Modifiez vos informations</h1>
    </div>
    -->

    <div class="row">
        <div class="col-md-1 mb-4"></div>
        <div class="col-md-10 mb-4 py-4">
            <p class="header-section">Mes informations de profil</p>
        </div>
        <div class="col-md-1 mb-4"></div>
    </div>

    <div class="formulaire">
        <!-- nom de l'action à redefinir dans le back -->
        <form action="?controller=profil&action=modifier" method="post">

            <div class="form-group">
                <!--
                <label class="p-label" for="updateFirstName">Photo de profil</label>
                -->
                <div class="d-flex justify-content-center">
                    <a title="Profil" class="btn deco">
                        <!-- ceci est une image par defaut qui sera remplacée par la veritable photo de l'utilisateur -->
                       <img src="<?= e($_SESSION['PhotoDeProfil']) ?>">
                    </a>
                </div>

                <!-- Importer la dropzone ici -->

                <input type="file" name="PhotoDeProfil">

            </div>

            <div class="form-group">
                <label class="p-label" for="updateLastName">Nom</label>
                <input type="text" name="NomUtilisateur" id="updateLastName" maxlength="60" value="<?= $_SESSION["NomUtilisateur"] ?>" class="form-control input-lg">
                <!-- value doit etre prérempli par la variable du prenom de l'uilisateur -->
            </div>

            <div class="form-group">
                <label class="p-label" for="updateFirstName">Prénom</label>
                <input type="text" name="PrenomUtilisateur" id="updateFirstName" maxlength="60" value="<?= $_SESSION["PrenomUtilisateur"] ?>" class="form-control input-lg">
                <!-- value doit etre prérempli par la variable du prenom de l'uilisateur -->
            </div>

            <div class="form-group">
                <label class="p-label" for="updateNickName">Pseudo</label>
                <input type="text" name="PseudoUtilisateur" id="updateNickName" maxlength="60" value="<?= $_SESSION["PseudoUtilisateur"] ?>" class="form-control input-lg">
                <!-- value doit etre prérempli par la variable du pseudo de l'utilisateur -->
            </div>

            <div class="form-group">
                <label class="p-label" for="updateEmail">Adresse mail</label>
                <input type="email" name="Email" id="updateEmail" maxlength="60" value="<?= $_SESSION["Email"] ?>" class="form-control input-lg">
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
        </form>
        <div class="d-flex justify-content-end p-2">
            <a href="?controller=profil">
                <button class="btn btn-md p_btn">Revenir sur la page de mon profil</button>
            </a>
        </div>
    </div>
</section>
</br>
</main>

<?php require "view_end.php"; ?>
