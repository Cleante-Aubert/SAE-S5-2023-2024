<?php

class Model_user extends Model
{
    private static $instance = null;

    public static function getExtendedModel() {
        if (self::$instance == null){
            self::$instance = new self();
        }
        return self::$instance;
    }


    public function update_user_info($Name, $prenom, $nom, $pseudo, $email) {
        $bd = $this->getBd();
        $req = $bd->prepare("UPDATE utilisateur SET NomUtilisateur = :username, PrenomUtilisateur = :prenom, PseudoUtilisateur = :pseudo, Email = :email WHERE UtilisateurID = :old_username");

        $req->bindParam(':username', $Name);
        $req->bindParam(':prenom', $prenom);
        $req->bindParam(':pseudo', $pseudo);
        $req->bindParam(':email', $email);
        // Si vous utilisez NomUtilisateur comme clé de recherche, vous pouvez mettre à jour également cette valeur.
        $req->bindParam(':old_username', $_SESSION["Id"]);

        $req->execute();
    }

    public function updatePassword($email,$hashedPassword){
            $bd = $this->getBd();
            $req = $bd->prepare('UPDATE utilisateur SET MotDePasse =:pass where Email= :email ');

            $req->bindValue(':pass',$hashedPassword);
            $req->bindValue(':email',$email);
            $req->execute();

            // Confirm requete réussie
            return (bool) $req->rowCount();
    }

    public function getPassword($email){
            $bd = $this->getBd();
            $req = $bd->prepare('SELECT MotDePasse FROM utilisateur WHERE Email = :email');
            $req->bindValue(':email',$email);
            $req->execute();
            $tab = $req->fetch(PDO::FETCH_NUM);
            return $tab[0];
        }

}