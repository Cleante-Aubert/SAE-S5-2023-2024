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

            // TODO: rajouter condition "on Submit"

            $m->update_user_info($_POST["NomUtilisateur"],$_POST["PrenomUtilisateur"],$_POST["PseudoUtilisateur"],$_POST["Email"],$_POST["MotDePasse"]);

            // TODO : Faire le changement de password

            $data = ["Vous avez modifié avec succès vos informations."];

            $this->render("form_update_vente", $data);
        }
    }

}