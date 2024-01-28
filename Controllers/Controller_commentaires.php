<?php
class Controller_commentaires extends Controller {

    public function action_index() {
        // Instanciation du modèle de commentaires
        $model_commentaires = Model_commentaires::getExtendedModel();

        // Récupération de tous les avis
        $avis = $model_commentaires->getAllAvis();

        // Chargement de la vue
        $view = View::forge('commentaires/index');
        $view->set('avis', $avis);

        return $view;
    }
}