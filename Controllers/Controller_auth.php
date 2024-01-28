<?php
require_once "Models/Model_auth.php";

class Controller_auth extends Controller {

    public function action_form_login() {
        $data = ["message"=>""];
        $this->render("login", $data);
    }

    public function action_form_signup() {
        $data = ["message"=>""];
        $this->render("signup", $data);
    }

    public function action_signup() {
        $m = Model_auth::getExtendedModel();

        if (isset($_POST['submit']) ) {
            if ( isset($_POST['NomUtilisateur']) && isset($_POST['PrenomUtilisateur']) && isset($_POST['PseudoUtilisateur']) && isset($_POST['Email']) && isset($_POST['MotDePasse'] )){

                $listePseudosAndEmails = $m->getUsernamesAndEmails();
                foreach ($listePseudosAndEmails as $value){
                    if ($value["PseudoUtilisateur"] == $_POST['PseudoUtilisateur']){
                        $data = ["message"=>"Le pseudo que vous avez choisi est déjà pris. Veuillez en choisir un autre."];
                        $this->render("signup", $data);
                    } elseif ($value["Email"] == $_POST["Email"]){
                        $data = ["message"=>"L'adresse mail que vous avez renseigné est déjà attribué. Veuillez en utiliser un autre."];
                        $this->render("signup", $data);
                    }
                }

                $infos = [];
                $attributs = ['NomUtilisateur','PrenomUtilisateur','PseudoUtilisateur','Email'];
                foreach ($attributs as $val){
                    $infos[$val] = $_POST[$val];
                }
                $infos['MotDePasse'] = password_hash($_POST['MotDePasse'], PASSWORD_DEFAULT );
                //$infos['pdp'] = "Content/Images/Pdp/no-pdp.jpg"; // Partie à développer plus tard avec les photos de profil
                $m->inscription($infos);
                $data = ["message"=>"Votre compte a bien été crée, vous pouvez vous connecter"];
                $this->render("login", $data);


            } else {
                $data = ["message"=>"Veuillez remplir tous les champs du formulaire"];
                $this->render("signup", $data);
            }
        } else {
            $data = ["message"=>""];
            $this->render("signup", $data);
        }
    }


    public function action_login() {
        $m = Model_auth::getExtendedModel();

        if (isset($_POST["submit"])) {
            if ( isset($_POST['identifiant']) && isset($_POST['password']) ) {
                $data = $m->getUsernamesAndEmails();

                $usernames = array_column($data, "PseudoUtilisateur");
                $emails = array_column($data, "Email");

                if ( in_array($_POST["identifiant"], $usernames) or in_array($_POST["identifiant"], $emails) ) {
                    $user = $m->getInformationsCompte($_POST["identifiant"]);
                    if (password_verify($_POST["password"], $user["MotDePasse"])) {
                    // Remplissage de la session
                        $_SESSION["connected"] = true;
                        $_SESSION["Id"] = $user["UtilisateurID"];
                        $_SESSION["Nom"] = $user["NomUtilisateur"];
                        $_SESSION["Prenom"] = $user["PrenomUtilisateur"];
                        $_SESSION["Pseudo"] = $user["PseudoUtilisateur"];
                        $_SESSION["Email"] = $user["Email"];

                    // Redirection
                        $data = ["message"=>"Authentification réussie."];
                        $this->render("test", $data);
                    } else {
                        $data = ["message"=>"Mot de passe incorrect"];
                        $this->render("login", $data);
                    }
                } else {
                    $data = ["message"=>"Le mail/identifiant renseigné n'existe pas. Veuillez en utiliser un autre."];
                    $this->render("login", $data);
                }
            } else {
                $data = ["message"=>"Veuillez renseigner les champs pour vous authentifier."];
                $this->render("login", $data);
            }
        } else {
            $data = ["message"=>""];
            $this->render("login", $data);
        }
    }

    public function action_logout(){
        if(isset($_SESSION['connected']) && $_SESSION['connected'] !== null ){
            $_SESSION = array();
            session_destroy();
            $data = [
                "title" => "Déconnexion",
                "str_lien_retour" => "Retour à la page d'accueil",
                "lien_retour" => "?controller=home&action=home",
                "message" => "Vous avez été déconnecté."
            ];
            $this->render("login", $data);
        }
        else{
            $data = ["Vous n'êtes pas connectés"];
            $this->render("message",$data);
        }
    }


    public function action_default() {
        $this->action_form_signup();
    }
}