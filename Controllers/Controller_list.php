<?php
require_once "Models/Model_list.php";

class Controller_list extends Controller {

    public function action_film(){
        $m = Model_list::getExtendedModel();

        $data = $m->getAffichesEtNomsFilm();
        $this->render("movie", $data);
    }

    public function action_selection() {
        $m = Model_list::getExtendedModel();
        $data = $m->getFilm($_GET['film']);

        // Pour afficher sous format durée du film en : XXh XXm
        $duree = date_create_from_format('H:i:s', $data["DureeFilm"]);
        $data["DureeFilm"] = substr($duree->format('H\h i\min'), 0, 7);

        $this->render("selected_movie", $data);
    }

    public function action_actu() {
        $this->action_default(); // à changer une fois que la vue actu sera là
    }

    public function action_default()
    {
        $this->action_film();
    }
}