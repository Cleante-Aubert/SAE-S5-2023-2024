<?php

require_once "Models/Model_user.php";

abstract class Controller_user extends Controller{


/*
$_SESSION["connected"] = true;
$_SESSION["Id"] = $user["UtilisateurID"];
$_SESSION["Nom"] = $user["NomUtilisateur"];
$_SESSION["Prenom"] = $user["PrenomUtilisateur"];
$_SESSION["Pseudo"] = $user["PseudoUtilisateur"];
$_SESSION["Email"] = $user["Email"];
*/


    public function action_form_update_userInfos(){

        $m = Model::getModel();

        if (!isset($_SESSION['connected']) || !isset($_SESSION['Id']) || !isset($_SESSION['Nom']) || !$_SESSION['Prenom'] || $_SESSION['Pseudo'] || $_SESSION['Email']) {
            $data = ["message"=>"Veuillez renseigner les champs pour vous authentifier."];
            $this->render("view_login",$data);
        }

        if( isset($_SESSION["connected"])&&
            isset($_SESSION["Id"]) &&
            isset($_SESSION["Nom"]) &&
            isset($_SESSION["Prenom"]) &&
            isset($_SESSION["Pseudo"]) &&
            isset($_SESSION["Email"]) &&
            isset($_POST["NomUtilisateur"]) &&
            isset($_POST["PrenomUtilisateur"]) &&
            isset($_POST["PseudoUtilisateur"]) &&
            isset($_POST["Email"]) &&
            isset($_POST["MotDePasse"])
        ) {

            $currentPasswordFromDB = $m->getPassword($_SESSION["Email"]);

            // Vérifier si le mot de passe actuel fourni dans le formulaire correspond au mot de passe stocké dans la base de données
            if (password_verify($_POST["MotDePasse"], $currentPasswordFromDB)) {
                // Vérifier si les champs "Nouveau mot de passe" et "Confirmer le mot de passe" sont les identiques
                if ($_POST["updatePassWord"] === $_POST["confirmPassWord"]) {

                    $m->update_user_info($_POST["NomUtilisateur"], $_POST["PrenomUtilisateur"], $_POST["PseudoUtilisateur"], $_POST["Email"], $_POST["updatePassWord"]);
                    $m->updatePassword($_SESSION["Email"], $_POST["updatePassWord"]);

                    $data = ["message" => "Vous avez modifié avec succès vos informations.", "color" => "green"];
                    $this->render("update_profile", $data);
                } else {
                    // Si les champs "Nouveau mot de passe" et "Confirmer le mot de passe" ne correspondent pas, afficher un message d'erreur
                    $data = ["message" => "Les champs 'Nouveau mot de passe' et 'Confirmer le mot de passe' ne correspondent pas.", "color" => "red"];
                    $this->render("update_profile", $data);
                }
            } else {
                // Si les mots de passe ne correspondent pas, afficher un message d'erreur
                $data = ["message" => "Mot de passe actuel incorrect.", "color" => "red"];
                $this->render("update_profile", $data);
            }
        }
    }

}