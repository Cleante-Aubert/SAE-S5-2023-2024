<?php

class Controller_home extends Controller {

    public function action_home(){
        $data = ["message"=>""];
        $this->render("login", $data);
    }
    public function action_default()
    {
        $this->action_home();
    }
}