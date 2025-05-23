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
        file_put_contents('debug_ajax.txt', print_r($_POST, true), FILE_APPEND);
        if ($this->Session->isLogged() && !empty($_POST['id']) && !empty($_POST['field']) && isset($_POST['value']) && !empty($_POST['table'])) {
            $id = intval($_POST['id']);
            $field = htmlspecialchars($_POST['field']);
            $value = htmlspecialchars($_POST['value']);
            $table = htmlspecialchars($_POST['table']);

            $this->Portfolio->setTable($table);
            // Champs valides pour une section
            $validFields = [
                // accueil
                'title', 'content',

                // a_propos
                'title_1', 'title_2', 'content_1', 'content_2',
                'birthdate', 'phone', 'addr', 'age', 'degree', 'email',

                // stat
                'icon', 'value', 'title', 'description',

                // competences
                // (déjà inclus: title, content)

                // parcours
                'date_range',

                // portfolio
                'technology', 'year', 'model', 'link',

                // savoir_faire
                // (déjà inclus: title, content)

                // contact
                // (déjà inclus: title, content)
            ];
            if (in_array($field, $validFields)) {
                try {
                    // Mise à jour dans le modèle
                    $this->Portfolio->updateField($id, $field, $value);

                    // Envoi d'un message flash de succès
                    $this->Session->setFlash('Modification réalisé avec succés', '<i class="bi bi-check-circle"></i>', 'success');
                    echo json_encode(['status' => 'success']);
                } catch (Exception $e) {
                    // Envoi d'un message flash d'erreur
                    $this->Session->setFlash('Erreur lors de la modification : ' . $e->getMessage(), '<i class="bi bi-exclamation-circle"></i>', 'danger');
                    echo json_encode(['status' => 'error', 'message' => 'Erreur lors de la modification.']);
                }
            } else {
                // Envoi d'un message flash pour champ invalide
                $this->Session->setFlash('Champ invalide.', '<i class="bi bi-exclamation-circle"></i>', 'danger');
                echo json_encode(['status' => 'error', 'message' => 'Champ invalide']);
            }
        } else {
            // Envoi d'un message flash pour données invalides
            $this->Session->setFlash('Données invalides.', '<i class="bi bi-exclamation-circle"></i>', 'danger');
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