<?php require "view_begin.php";?>
<link rel="stylesheet" href="../Content/css/login.css">

    <section class="connexion">

         <div class="row">
                <div class="col-md-1 mb-4"></div>
                <div class="col-md-10 mb-4 py-4">
                    <p class="header-section">Connexion</p>
                </div>
                <div class="col-md-1 mb-4"></div>
         </div>
         <div class="formulaire">

            <form action="?controller=auth&action=login" method="post" >
                <div class="form-group">
                      <label class="p-label" for="createEmail">Email </label>
                      <input type="email" name="email" id="createEmail" maxlength="60" value="" class="form-control input-lg">
                </div>

                <div class="form-group">
                      <label class="p-label" for="createPassword">Mot de passe </label>
                      <input type="password" name="password" id="createPassword" minlength="8" maxlength="64" class="form-control input-lg">
                </div>

                <p><a href="?controller=auth&action=form_oublimdp">Mot de passe oublié ? </a></p> <br>
                <div class="d-flex justify-content-end p-2">
                        <input type="submit" class="btn btn-md p_btn" value="Connexion">
                </div>
                </br>

                <p>Tu n'as de compte ? <a href="?controller=auth&action=form_signup">Inscris-toi</a></p>
            </form>
        </div>
    </section>
    </main>

<?php require "view_end.php";?>

