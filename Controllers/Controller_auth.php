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
            if ( $_POST['NomUtilisateur'] != "" && $_POST['PrenomUtilisateur'] != "" && $_POST['PseudoUtilisateur'] != "" && $_POST['Email'] != "" && $_POST['MotDePasse'] != "" ){

                $listePseudos = $m->getUsernames();
                foreach ($listePseudos as $value){
                    if ($value["PseudoUtilisateur"] == $_POST['PseudoUtilisateur']){
                        $data = ["message"=>"Le pseudo que vous avez choisi est déjà pris. Veuillez en choisir un autre."];
                        $this->render("signup", $data);
                    }
                }

                $infos = [];
                $attributs = ['NomUtilisateur','PrenomUtilisateur','PseudoUtilisateur','Email'];
                foreach ($attributs as $val){
                    $infos[$val] = $_POST[$val];
                }
                $infos['MotDePasse'] = md5($_POST['MotDePasse']);
                // $infos['pdp'] = "Content/Images/Pdp/no-pdp.jpg"; // Partie à développer plus tard avec les photos de profil
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
    public function action_default() {
        $this->action_form_signup();
    }
}