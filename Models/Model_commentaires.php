<?php

class Model_commentaires extends Model {

    private static $instance = null;

    public static function getExtendedModel() {
        if (self::$instance == null){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getAllAvis(){
        $bd = $this->getBd();
        $requete = $bd->prepare("SELECT Commentaire FROM critiques");
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }

    public function update_avis($ID_user,$Com,$ID_film){
        $bd = $this->getBd();
        $requete = $bd->prepare('UPDATE critiques SET Commentaire = :com WHERE UtilisateurID = :id AND FilmID = :film');

        //Remplacement des marqueurs de place par les valeurs
        $requete->bindValue(':id', $ID_user);
        $requete->bindValue(':com', $Com);
        $requete->bindValue(':film', $ID_film);

        //Exécution de la requête
        $requete->execute();

        return (bool) $requete->rowCount();
    }

    public function remove_avis($ID_user,$ID_film){
        $bd = $this->getBd();
        $requete = $bd->prepare('DELETE FROM critiques WHERE UtilisateurID = :id AND FilmID = :film_id');
        $requete->bindValue(':id', $ID_user);
        $requete->bindValue(':film', $ID_film);
        $requete->execute();
        return (bool) $requete->rowCount();
    }

    public function getAvisByFilmId($film_id) {
        $bd = $this->getBd();
        $requete = $bd->prepare("SELECT Commentaire FROM critiques WHERE FilmID = :film_id");
        $requete->bindValue(':film_id', $film_id);
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }



}
