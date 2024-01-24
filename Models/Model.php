<?php
class Model {
    private $bd;
    private static $instance = null;

    /**
     * Methode terminée, ne pas modifier
     */
    public function __construct(){
        include "Utils/credentials.php";
        $this->bd = new PDO($dsn, $username, $password);
        $this->bd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->bd->query("SET nameS 'utf8'");
    }

    /**
     * Methode terminée, a ne pas modifier
     * @return Model|null
     */
    public static function getModel(){
        if (self::$instance == null){
            self::$instance = new self();
        }
        return self::$instance;
    }

    /**
     * @return PDO
     */
    public function getBd() {
        return $this->bd;
    }
}
?>
