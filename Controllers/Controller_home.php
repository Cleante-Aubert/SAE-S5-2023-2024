<?php

require_once "Models/Model_list.php";
class Controller_home extends Controller {

    public function action_home(){
        $m = Model_list::getExtendedModel();
        $data = $m->getAffichesEtNomsFilm();
        $this->render("home", $data);
    }

    public function action_cgu(){
        $data = ["message"=>""];
        $this->render("cgu", $data);
    }

    public function action_faq(){
        $data = ["message"=>""];
        $this->render("faq", $data);
    }
    public function action_contact(){
        $data = ["message"=>""];
        $this->render("contact", $data);
    }

    public function action_waw(){
        $data = ["message"=>""];
        $this->render("waw", $data);
    }

    public function action_map(){
        $data = ["message"=>""];
        $this->render("map", $data);
    }

    public function action_forum(){
        $data = ["message"=>""];
        $this->render("forum", $data);
    }

    public function action_all_forum(){
        $data = ["message"=>""];
        $this->render("all_forum", $data);
    }

    public function action_default()
    {
        $this->action_home();
    }
}