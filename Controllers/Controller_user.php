<?php

require_once "Models/Model_user.php";

class Controller_user extends Controller{

    public function action_default()
    {
        $this->action_my_profile();
    }

    /*
    $_SESSION["connected"] = true;
    $_SESSION["Id"] = $user["UtilisateurID"];
    $_SESSION["Nom"] = $user["NomUtilisateur"];
    $_SESSION["Prenom"] = $user["PrenomUtilisateur"];
    $_SESSION["Pseudo"] = $user["PseudoUtilisateur"];
    $_SESSION["Email"] = $user["Email"];
    */


    public function action_my_profile(){
        // Vérifier si l'utilisateur est connecté
        if (isset($_SESSION["connected"]) && $_SESSION["connected"] === true) {
            // Utilisateur connecté, rediriger vers la vue my_profile
            $data = [];
            $this->render("my_profile", $data);
        } else {
            // Utilisateur non connecté, rediriger vers la page de connexion
            $this->render("view_login", ["message" => "Veuillez vous connecter pour accéder à votre profil."]);
        }
    }

    public function action_update_profile(){
        $data = ["message"=>""];
        $this->render("update_profile", $data);
    }


    public function action_form_update_userInfos(){

        $m = Model_user::getExtendedModel();

        if (!$_SESSION['connected']) { // Vérifie qu'on est connecté, et si c'est pas le cas redirect vers login
            $data = ["message"=>"Veuillez-vous authentifier."];
            $this->render("login", $data);
        }

        if( isset($_POST["NomUtilisateur"]) &&
            isset($_POST["PrenomUtilisateur"]) &&
            isset($_POST["PseudoUtilisateur"]) &&
            isset($_POST["Email"])
        ) {
            if (!isset($_POST["MotDePasse"])) {
                $data = ["message"=>"Veuillez renseigner votre mot de passe."];
                $this->render("update_profile", $data);
            }

            // TODO: rajouter condition "on Submit"

            if (isset($_POST["submit"])) {

                $currentPasswordFromDB = $m->getPassword($_SESSION["Email"]);

                // Vérifier si le mot de passe actuel fourni dans le formulaire correspond au mot de passe stocké dans la base de données
                if (password_verify($_POST["MotDePasse"], $currentPasswordFromDB)) {

                    $infos =[];
                    $noms =['NomUtilisateur', 'PrenomUtilisateur', 'PseudoUtilisateur', 'Email'];
                    foreach ($noms as $val) {
                        $infos[$val] = $_POST[$val];
                    }
                    $m->updateProfil($infos);

                    if (isset($_POST["NouveauMotDePasse"]) && $_POST["NouveauMotDePasse"] != "") {
                        $NewMotDePasse = password_hash($_POST["NouveauMotDePasse"], PASSWORD_DEFAULT);
                        $m->updatePassword($_SESSION["Email"], $NewMotDePasse);
                    }

                    // Si les mots de passe correspondent, procéder à la mise à jour des informations de l'utilisateur
                    //$m->update_user_info($_POST["NomUtilisateur"], $_POST["PrenomUtilisateur"], $_POST["PseudoUtilisateur"], $_POST["Email"], $_POST["updatePassWord"]);
                    //$m->updatePassword($_SESSION["Email"],$currentPasswordFromDB);

                    $data = ["message"=>"Vous avez modifié avec succès vos informations."];
                    $this->render("update_profile", $data);
                } else {
                    // Si les mots de passe ne correspondent pas, afficher un message d'erreur
                    $data = ["message" => "Mot de passe actuel incorrect."];
                    $this->render("update_profile", $data);
                }

            }
            else {
                // Afficher un message d'erreur si le formulaire n'a pas été soumis
                $data = ["message" => "Le formulaire n'a pas été soumis."];
                $this->render("update_profile", $data);
            }

        }
    }

}