<?php
include_once '../Utils/database.php';

include_once '../Models/Model.php';


header('Content-Type: application/json');

class Controller_cinema extends Controller {
{
    private $model;

    public function __construct($db)
    {
        $this->model = new Model($db);
    }

    public function searchCinemas()
    {
        // Récupérer le code postal ou le nom de la ville depuis la requête POST
        $searchInput = isset($_POST['search_input']) ? $_POST['search_input'] : '';

        // Appeler la méthode du modèle pour obtenir les cinémas par code postal ou nom de la ville
        $cinemas = $this->model->getCinemasBySearchInput($searchInput);

        // Renvoyer les résultats au format JSON
        if (empty($cinemas)) {
            echo json_encode(['error' => 'Aucun cinéma trouvé pour la recherche donnée.']);
        } else {
            echo json_encode($cinemas);
        }
    }

    public function action_default()
    {
        // TODO: Implement action_default() method.
    }
}



// Créer une instance du contrôleur en passant la connexion à la base de données
$controller = new ControllerCinema($db);

// Appeler la méthode de recherche de cinémas
$controller->searchCinemas();

?>