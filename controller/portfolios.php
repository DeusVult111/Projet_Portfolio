<?php
class Portfolios extends Controller {
    var $models = array('Portfolio');
    var $Portfolio;

    function index() {
        $d = array();

        // Récupérer les données de chaque table
        $this->Portfolio->setTable('accueil');
        $d['accueil'] = $this->Portfolio->getSections();

        $this->Portfolio->setTable('a_propos');
        $d['a_propos'] = $this->Portfolio->getSections();

        $this->Portfolio->setTable('stat');
        $d['stat'] = $this->Portfolio->getSections();

        $this->Portfolio->setTable('competences');
        $d['competences'] = $this->Portfolio->getSections();

        $this->Portfolio->setTable('parcours');
        $d['parcours'] = $this->Portfolio->getSections();

        $this->Portfolio->setTable('portfolio');
        $d['portfolio'] = $this->Portfolio->getSections();

        $this->Portfolio->setTable('savoir_faire');
        $d['savoir_faire'] = $this->Portfolio->getSections();

        $this->Portfolio->setTable('contact');
        $d['contact'] = $this->Portfolio->getSections();

        $this->set($d);
        $this->render('index');
    }

    function section($id) {
        // Récupérer une section spécifique
        $d['section'] = $this->Portfolio->getSectionById($id);
        $this->set($d);
        $this->render('section');
    }

    // Mise à jour AJAX d'un champ de section
    function ajaxUpdateField() {
        if ($this->Session->isLogged() && !empty($_POST['id']) && !empty($_POST['field']) && isset($_POST['value'])) {
            $id = intval($_POST['id']);
            $field = htmlspecialchars($_POST['field']);
            $value = htmlspecialchars($_POST['value']);

            // Champs valides pour une section
            $validFields = ['title', 'content', 'date', 'image'];
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

    function ajaxSaveStat() {
        if ($this->Session->isLogged() && isset($_POST['icon'], $_POST['value'], $_POST['title'], $_POST['description'])) {
            $data = [
                'icon' => htmlspecialchars($_POST['icon']),
                'value' => intval($_POST['value']),
                'title' => htmlspecialchars($_POST['title']),
                'description' => htmlspecialchars($_POST['description']),
            ];

            if (!empty($_POST['id'])) {
                // Modification
                $data['id'] = intval($_POST['id']);
                $this->Portfolio->setTable('stat');
                $this->Portfolio->save($data);
            } else {
                // Création
                $this->Portfolio->setTable('stat');
                $this->Portfolio->save($data);
            }

            echo json_encode(['status' => 'success']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Données invalides']);
        }
        die();
    }
}