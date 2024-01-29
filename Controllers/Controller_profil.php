<?php
require_once "Models/Model_profil.php";

class Controller_profil extends Controller {

    public function action_profil() {
        $data = [""];
        $this->render("my_profile", $data);
    }

    public function action_modifier() {
        if (isset($_FILES['PhotoDeProfil'])) {
            if (!file_exists("Content/img/photosDeProfil/" .$_FILES['PhotoDeProfil']["name"])) {
                $image = $_FILES['pdp']['name'];
                $extensionsValide = array('.png', '.jpg', '.jpeg', '.gif', '.PNG', '.JPG', '.JPEG', '.GIF');
                $extensionImage = strrchr($image, '.');
                $tmpName = $_FILES['PhotoDeProfil']['tmp_name'];
                $imagePath = "Content/img/photosDeProfil/" .$image;
                move_uploaded_file($_FILES['PhotoDeProfil']['tmp_name'], $imagePath);
            } else {
                $imagePath = $_SESSION["PhotoDeProfil"];
            }

        } else {
            $imagePath = "Content/img/photosDeProfil/no-pdp.png";
        }

        $data = [];
        if(isset($_POST['PhotoDeProfil']) || isset($_POST["NomUtilisateur"]) || isset($_POST["PrenomUtilisateur"]) || isset($_POST["PseudoUtilisateur"]) || isset($_POST["Email"])) {
            $m = Model_profil::getExtendedModel();
            $infos =[];
            $noms =['NomUtilisateur', 'PrenomUtilisateur', 'PseudoUtilisateur', 'Email'];
            foreach ($noms as $val) {
                $infos[$val] = $_POST[$val];
            }
            $infos['PhotoDeProfil'] = $infos['image'] = $imagePath;
            $m->updateProfil($infos);
            $data = ["message"=>"Les modifications ont bien été appliquées.", "color"=>"green"];
            $this->render("update_profile", $data);
        } else {
            $this->render("update_profile", $data);
        }
    }

    public function action_default()
    {
        $this->action_profil();
    }
}