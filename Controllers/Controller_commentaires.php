<?php
class Controller_commentaires extends Controller {

public function action_index() {
// Instanciation du modèle de commentaires
$model_commentaires = Model_commentaires::getExtendedModel();

// Récupération de tous les avis
$getAllAvis = $model_commentaires->getAllAvis();

// Vous pouvez également récupérer les commentaires d'un film spécifique en utilisant le FilmID
$filmID = 1; // Remplacez par l'ID du film souhaité
$commentairesFilm = $model_commentaires->getCommentairesFilm($filmID);

// Fusionner les deux ensembles de données
$data = array(
'getAllAvis' => $getAllAvis,
'commentairesFilm' => $commentairesFilm
);

// Chargement de la vue
$view = View::forge('commentaires/index', $data);

return $view;
}
}
