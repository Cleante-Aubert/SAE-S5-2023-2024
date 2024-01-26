<?php

class Model_commentaires extends Model {

    private static $instance = null;

    public static function getExtendedModel() {
        if (self::$instance == null){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getAllCommentaires(){
        $bd = $this->getBd();
        $requete = $bd->prepare("SELECT Commentaire FROM critiques");
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }




}
