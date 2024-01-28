<?php

require_once "Models/Model_commentaires.php";
class Controller_commentaires extends Controller {

    public function action_comments() {
        $m = Model_commentaires::getExtendedModel();
        $film_id = $_GET['film_id'];
        $film_data = $m->getFilm($film_id);  // Récupère les informations du film
        $comments = $m->getAvisByFilmId($film_id);  // Récupère les commentaires du film
        $data = [
            'film' => $film_data,
            'comments' => $comments,
        ];
        $this->render("comments", $data);
    }


    public function action_default()
    {
        $this->action_comments();
    }

}
