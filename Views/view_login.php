<?php require "view_begin.php";?>
<link rel="stylesheet" href="Content/css/login.css">

    <section class="connexion">
        <div class="se_connecter">
            <h1>Connexion</h1>
        </div>

        <!-- à changer au front les bgs -->
        <p class="text-center" style="color:red"> <?= e($data["message"]) ?> </p>
        <!-- à changer au front les bgs -->
        </br>

         <div class="formulaire">

            <form action="?controller=auth&action=login" method="post" >
            <div class="form-group">
                  <label class="p-label" for="createEmail">Email </label>
                  <input type="text" name="identifiant" id="createEmail" maxlength="60" value="" class="form-control input-lg">
            </div>

            <div class="form-group">
                  <label class="p-label" for="createPassword">Mot de passe </label>
                  <input type="password" name="password" id="createPassword" minlength="8" maxlength="64" class="form-control input-lg">
            </div>

            <p><a href="?controller=auth&action=form_oublimdp">Mot de passe oublié ? </a></p> <br>
            <div class="d-flex justify-content-end p-2">
                    <input type="submit" name="submit" class="btn btn-md p_btn" value="Connexion">
            </div>
            </br>

            <p>Tu n'as de compte ? <a href="?controller=auth&action=form_signup">Inscris-toi</a></p>
            </form>



        </div>
    </section>
    </main>

</br>

<?php require "view_end.php";?>

