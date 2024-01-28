<?php

class Model_commentaires extends Model {

    private static $instance = null;

    public static function getExtendedModel() {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function getAllAvis() {
        $bd = $this->getBd();
        $requete = $bd->prepare("SELECT Commentaire FROM critiques");
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getAvisFilm($filmID) {
        $bd = $this->getBd();
        $requete = $bd->prepare("SELECT Commentaire FROM critiques WHERE FilmID = :filmID");
        $requete->bindValue(':filmID', $filmID);
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }

    public function ajouterAvis($utilisateurID, $filmID, $note, $commentaire, $dateCritique) {
        $bd = $this->getBd();
        $requete = $bd->prepare('INSERT INTO critiques (UtilisateurID, FilmID, Note, Commentaire, DateCritique) 
                                VALUES (:utilisateurID, :filmID, :note, :commentaire, :dateCritique)');

        $requete->bindValue(':utilisateurID', $utilisateurID);
        $requete->bindValue(':filmID', $filmID);
        $requete->bindValue(':note', $note);
        $requete->bindValue(':commentaire', $commentaire);
        $requete->bindValue(':dateCritique', $dateCritique);

        $requete->execute();

        return (bool)$requete->rowCount();
    }

    public function updateAvis($utilisateurID, $commentaire, $filmID) {
        $bd = $this->getBd();
        $requete = $bd->prepare('UPDATE critiques SET Commentaire = :commentaire 
                                WHERE UtilisateurID = :utilisateurID AND FilmID = :filmID');

        $requete->bindValue(':utilisateurID', $utilisateurID);
        $requete->bindValue(':commentaire', $commentaire);
        $requete->bindValue(':filmID', $filmID);

        $requete->execute();

        return (bool)$requete->rowCount();
    }

    public function supprimerAvis($utilisateurID, $filmID) {
        $bd = $this->getBd();
        $requete = $bd->prepare('DELETE FROM critiques WHERE UtilisateurID = :utilisateurID AND FilmID = :filmID');
        $requete->bindValue(':utilisateurID', $utilisateurID);
        $requete->bindValue(':filmID', $filmID);
        $requete->execute();

        return (bool)$requete->rowCount();
    }

    public function getCommentairesFilm($filmID) {
        $bd = $this->getBd();
        $requete = $bd->prepare("SELECT * FROM critiques WHERE FilmID = :filmID");
        $requete->bindValue(':filmID', $filmID);
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }
}