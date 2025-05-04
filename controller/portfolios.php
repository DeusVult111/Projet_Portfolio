<?php
class Portfolios extends Controller {
    var $models = array('Portfolio');
    var $Portfolio;

    function index() {
        $d['sections'] = $this->Portfolio->getSections();
        $this->set($d);
        $this->render('index');
    }

    // Mise à jour AJAX d'un champ de section
    function ajaxUpdateField() {
        if ($this->Session->isLogged() && !empty($_POST['id']) && !empty($_POST['field']) && isset($_POST['value'])) {
            $id = intval($_POST['id']);
            $field = htmlspecialchars($_POST['field']);
            $value = htmlspecialchars($_POST['value']);

            // Champs valides pour une section
            $validFields = ['title', 'content', 'image'];
            if (in_array($field, $validFields)) {
                // Mise à jour dans le modèle
                $this->Portfolio->updateField($id, $field, $value);
                echo json_encode(['status' => 'success']);
            } else {
                echo json_encode(['status' => 'error', 'message' => 'Champ invalide']);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Données invalides']);
        }
        die();
    }
}