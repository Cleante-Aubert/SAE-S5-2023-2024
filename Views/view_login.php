<?php require "view_begin.php";?>
<link rel="stylesheet" href="Content/css/login.css">

    <section class="connexion">
        <div class="se_connecter">
            <h1>Connexion</h1>
        </div>

         <div class="formulaire">

            <form action="?controller=auth&action=login" method="post" >
            <div class="form-group">
                  <label class="p-label" for="createEmail">Nom d'utilisateur ou Email</label>
                  <input type="text" name="identifiant" id="createEmail" maxlength="60" value="" class="form-control input-lg">
            </div>

            <div class="form-group">
                  <label class="p-label" for="createPassword">Mot de passe </label>
                  <input type="password" name="password" id="createPassword" minlength="8" maxlength="64" class="form-control input-lg">
            </div>

            <!-- à changer au front les bgs -->
            <p style="color:green"> <?= e($data["message"]) ?> </p>
            <!-- à changer au front les bgs -->

            <p><a href="?controller=auth&action=form_oublimdp">Mot de passe oublié ? </a></p> <br>
            <div class="d-flex justify-content-end p-2">
                    <input type="submit" class="btn btn-md p_btn" value="Connexion" name="submit">
            </div>
            </br>

            <p>Tu n'as de compte ? <a href="?controller=auth&action=form_signup">Inscris-toi</a></p>
            </form>
        </div>
    </section>
    </main>

<?php require "view_end.php";?>

