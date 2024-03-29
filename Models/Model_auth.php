<?php

class Model_auth extends Model {

    private static $instance = null;

    public static function getExtendedModel() {
        if (self::$instance == null){
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function inscription($infos) {
        $bd = $this->getBd();
        $requete = $bd->prepare("INSERT INTO utilisateur (NomUtilisateur, PrenomUtilisateur, PseudoUtilisateur, Email, MotDePasse, DateInscription)
                                        VALUES (:NomUtilisateur, :PrenomUtilisateur, :PseudoUtilisateur, :Email, :MotDePasse, CURRENT_DATE)");
        $marqueurs = ["NomUtilisateur", "PrenomUtilisateur", "PseudoUtilisateur", "Email", "MotDePasse"];
        foreach ($marqueurs as $val) {
            $requete->bindValue(':' .$val, $infos[$val]);
        }
        $requete->execute();
        return (bool) $requete->rowCount();
    }

    public function getUsernamesAndEmails() {
        $bd = $this->getBd();
        $requete = $bd->prepare("SELECT PseudoUtilisateur,Email FROM utilisateur");
        $requete->execute();
        return $requete->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getInformationsCompte($identifiant) {
        $bd = $this->getBd();
        $requete = $bd->prepare("SELECT * FROM utilisateur WHERE PseudoUtilisateur = :identifiant OR Email = :identifiant");
        $requete->bindValue(':identifiant', $identifiant);
        $requete->execute();
        return $requete->fetch(PDO::FETCH_ASSOC);
    }

}
