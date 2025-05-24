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

        $this->Portfolio->setTable('competences_item');
        $d['competences_items'] = $this->Portfolio->getSections();

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
        file_put_contents('debug_ajax.txt', "\n--- NOUVELLE REQUETE ---\n", FILE_APPEND);
        file_put_contents('debug_ajax.txt', print_r($_POST, true), FILE_APPEND);
        if ($this->Session->isLogged() && !empty($_POST['field']) && isset($_POST['value']) && !empty($_POST['table'])) {
            $id = !empty($_POST['id']) ? intval($_POST['id']) : null;
            $field = $_POST['field'];
            $value = $_POST['value'];
            $table = $_POST['table'];

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
                    $data = [$field => $value];
                    if ($id) $data['id'] = $id;
                    $this->Portfolio->save($data);

                    $msg = $id ? 'Modification réalisée avec succès' : 'Création réalisée avec succès';
                    $newId = $id ? $id : ($this->Portfolio->id ?? null); // Récupère l'id créé si création

                    file_put_contents('debug_ajax.txt', "RETOUR JSON: " . json_encode([
                        'status' => 'success',
                        'id' => $newId
                    ]) . "\n", FILE_APPEND); 

                    $this->Session->setFlash($msg, '<i class="bi bi-check-circle"></i>', 'success');
                    echo json_encode([
                        'status' => 'success',
                        'id' => $newId // Ajoute l'id dans la réponse
                    ]);
                } catch (Exception $e) {
                    $this->Session->setFlash('Erreur : ' . $e->getMessage(), '<i class="bi bi-exclamation-circle"></i>', 'danger');
                    echo json_encode(['status' => 'error', 'message' => 'Erreur lors de la sauvegarde.']);
                }
            } else {
                $this->Session->setFlash('Champ invalide.', '<i class="bi bi-exclamation-circle"></i>', 'danger');
                echo json_encode(['status' => 'error', 'message' => 'Champ invalide']);
            }
        } else {
            $this->Session->setFlash('Données invalides.', '<i class="bi bi-exclamation-circle"></i>', 'danger');
            echo json_encode(['status' => 'error', 'message' => 'Données invalides']);
        }
        die();
    }

    public function ajaxDeleteItem() {
        if ($this->Session->isLogged() && !empty($_POST['id']) && !empty($_POST['table'])) {
            $id = intval($_POST['id']);
            $table = $_POST['table'];
            $this->Portfolio->setTable($table);
            try {
                if ($this->Portfolio->deleteItem($id)) {
                    echo json_encode(['status' => 'success']);
                } else {
                    echo json_encode(['status' => 'error', 'message' => 'Erreur lors de la suppression.']);
                }
            } catch (Exception $e) {
                echo json_encode(['status' => 'error', 'message' => $e->getMessage()]);
            }
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Données invalides']);
        }
        die();
    }

}