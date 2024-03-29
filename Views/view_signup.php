<?php if (isset($_SESSION["connected"]) && $_SESSION["connected"]==True) : ?>
  <?php require "view_begin.php"; ?>
<?php else : ?>
  <?php require "view_begin.php";?>
<?php endif ?>
<link rel="stylesheet" href="Content/css/signup.css">

<section class="inscription">
    <div class="row">
        <div class="col-md-1 mb-4"></div>
        <div class="col-md-10 mb-4 py-4">
            <p class="header-section">Formulaire d'inscription</p>
        </div>
        <div class="col-md-1 mb-4"></div>
    </div>
  <div class="formulaire">
  <form action="?controller=auth&action=signup" method="post" >

    <div class="form-group ">
      <label class="p-label" for="name">Nom *</label>
      <input type="text" name="NomUtilisateur" id="name" maxlength="40" value="" class="form-control input-lg ">
    </div>

    <div class="form-group ">
      <label class="p-label" for="firstname">Prénom *</label>
      <input type="text" name="PrenomUtilisateur" id="firstname" maxlength="40" value="" class="form-control input-lg">
    </div>

    <div class="form-group ">
        <label class="p-label" for="pseudo">Pseudo *</label>
        <input type="text" name="PseudoUtilisateur" id="pseudo" maxlength="40" value="" class="form-control input-lg">
    </div>


    <div class="form-group">
        <label class="p-label" for="createEmail">Email *</label>
        <input type="email" name="Email" id="createEmail" maxlength="60" value="" class="form-control input-lg">
    </div>

      <div class="form-group">
          <label class="p-label" for="createPassword">Mot de passe *</label>
          <input type="password" name="MotDePasse" id="createPassword" minlength="8" maxlength="64" class="form-control input-lg">
      </div>

      <div class="form-group ">
        <label class="p-label" for="confirmPassword">Confirme ton mot de passe *</label>
        <input type="password" name="confirmPassword" id="confirmPassword" maxlength="64" class="form-control input-lg ">
      </div>

    <div class="d-flex justify-content-end p-2">
        <input type="submit" class="btn btn-md p_btn" value="Créer le compte" name="submit">
    </div>

  </form>

  <!-- à changer au front les bgs -->
  <p style="color:red"> <?= e($data["message"]) ?> </p>
  <!-- à changer au front les bgs -->

  </div>
</section>

</main>
</br>

<?php require "view_end.php";?>
