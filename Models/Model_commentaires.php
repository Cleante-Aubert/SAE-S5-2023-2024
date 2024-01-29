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
        $requete = $bd->prepare('UPDATE critiques SET Commentaires = :com WHERE UtilisateurID = :id AND FilmID = :film');

        //Remplacement des marqueurs de place par les valeurs
        $requete->bindValue(':id', $ID_user);
        $requete->bindValue(':com', $Com);
        $requete->bindValue(':film', $ID_film);

        //Exécution de la requête
        $requete->execute();

        return (bool) $requete->rowCount();

        // TODO: ajouter à cette fonctiion la possibilité de modifier la note également en passant en paramètres. Utiliser boucle Foreach
        // TODO: Faire les différents controllers une fois les views en place
    }

    public function remove_avis($ID_user,$ID_film){
        $bd = $this->getBd();
        $requete = $bd->prepare('DELETE FROM critiques WHERE UtilisateurID = :id AND FilmID = :film  ');
        $requete->bindValue(':id', $ID_user);
        $requete->bindValue(':film', $ID_film);
        $requete->execute();
        return (bool) $requete->rowCount();
    }








}
