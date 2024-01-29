<?php

class Model_profil extends Model
{

    private static $instance = null;

    public static function getExtendedModel()
    {
        if (self::$instance == null) {
            self::$instance = new self();
        }
        return self::$instance;
    }

    public function updateProfil($infos) {
        $bd = $this->getBd();
        $requete = $bd->prepare('UPDATE utilisateur SET PhotoDeProfil=:PhotoDeProfil, NomUtilisateur=:NomUtilisateur, PrenomUtilisateur=:PrenomUtilisateur, PseudoUtilisateur=:PseudoUtilisateur, Email=:Email WHERE UtilisateurID=' .$_SESSION['Id']);
        $marqueurs = ['PhotoDeProfil','NomUtilisateur','PrenomUtilisateur', 'PseudoUtilisateur', 'Email'];
        foreach ($marqueurs as $val) {
            $requete->bindValue(':' .$val, $infos[$val]);
            $_SESSION[$val] = $infos[$val];
        }
        $requete->execute();
        return (bool) $requete->rowCount();
    }

}