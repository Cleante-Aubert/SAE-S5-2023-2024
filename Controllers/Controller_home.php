<?php

class Controller_home extends Controller {

    public function action_home(){
        $data = ["message"=>""];
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
    public function action_default()
    {
        $this->action_home();
    }
}