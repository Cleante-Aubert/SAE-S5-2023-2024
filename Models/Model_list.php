<?php

class Model_list extends Model
{

    private static $instance = null;

    public static function getExtendedModel()
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getAffichesEtNomsFilm() {
        $bd = $this->getBd();
        $requete = $bd->prepare("SELECT Titre,Affiche FROM film");
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getFilm($titre) {
        $bd = $this->getBd();
        $requete = $bd->prepare("SELECT * FROM film WHERE Titre = :titre");
        $requete->bindValue(':titre', $titre);
        $requete->execute();
        return $requete->fetch(PDO::FETCH_ASSOC);
    }

}