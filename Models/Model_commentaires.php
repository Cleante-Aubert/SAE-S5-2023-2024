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

    public function update_commentaire($ID_user,$Com){
        $bd = $this->getBd();
        $requete = $bd>prepare('UPDATE critiques SET Commentaires = :com WHERE UtilisateurID = :id ');

        //Remplacement des marqueurs de place par les valeurs
        $requete->bindValue(':id', $ID_user);
        $requete->bindValue(':com', $Com);

        //Exécution de la requête
        $requete->execute();

        return (bool) $requete->rowCount();
    }




}
