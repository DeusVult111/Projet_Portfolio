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

        $this->Portfolio->setTable('parcours_formation');
        $d['parcours_formation'] = $this->Portfolio->getSections();

        $this->Portfolio->setTable('parcours_xppro');
        $d['parcours_xppro'] = $this->Portfolio->getSections();

        $this->Portfolio->setTable('portfolio');
        $d['portfolio'] = $this->Portfolio->getSections();

        $this->Portfolio->setTable('portfolio_item');
        $d['portfolio_items'] = $this->Portfolio->getSections();

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
        if ($this->Session->isLogged() && !empty($_POST['table'])) {
            $id = !empty($_POST['id']) ? intval($_POST['id']) : null;
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

                // competences_item
                'name',

                // parcours
                'date_range',
                // parcours_formation et parcours_xppro
'               title', 'date_range', 'content',

                // portfolio
                'technology', 'year', 'model', 'link', 'category',
                // savoir_faire
                // (déjà inclus: title, content)

                // contact
                // (déjà inclus: title, content)
            ];

            $data = [];

            // Cas édition inline (field + value)
            if (isset($_POST['field']) && isset($_POST['value']) && in_array($_POST['field'], $validFields)) {
                $data[$_POST['field']] = $_POST['value'];
            } else {
                // Cas formulaire complet (plusieurs champs)
                foreach ($validFields as $field) {
                    if (isset($_POST[$field])) {
                        $data[$field] = $_POST[$field];
                    }
                }
            }
            if ($id) $data['id'] = $id;

            if (!empty($data)) {
                try {
                    $this->Portfolio->save($data);
                    $msg = $id ? 'Modification réalisée avec succès' : 'Création réalisée avec succès';
                    $newId = $id ? $id : ($this->Portfolio->id ?? null);

                    file_put_contents('debug_ajax.txt', "RETOUR JSON: " . json_encode([
                        'status' => 'success',
                        'id' => $newId
                    ]) . "\n", FILE_APPEND);

                    $this->Session->setFlash($msg, '<i class="bi bi-check-circle"></i>', 'success');
                    echo json_encode([
                        'status' => 'success',
                        'id' => $newId
                    ]);
                } catch (Exception $e) {
                    $this->Session->setFlash('Erreur : ' . $e->getMessage(), '<i class="bi bi-exclamation-circle"></i>', 'danger');
                    echo json_encode(['status' => 'error', 'message' => 'Erreur lors de la sauvegarde.']);
                }
            } else {
                $this->Session->setFlash('Champ invalide.', '<i class="bi bi-exclamation-circle"></i>', 'danger');
                echo json_encode(['status' => 'error', 'message' => 'Champ invalide']);
            }
            die();
        }
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

    public function detail($id = null) {
        if (empty($id) || !is_numeric($id)) {
            $this->Session->setFlash('Projet introuvable.', '<i class="bi bi-exclamation-circle"></i>', 'danger');
            header('Location: /' . WEBROOT2 . '/');
            exit;
        }

        $item = $this->Portfolio->getPortfolioItemById($id);

        if (!$item) {
            $this->Session->setFlash('Projet introuvable.', '<i class="bi bi-exclamation-circle"></i>', 'danger');
            header('Location: /' . WEBROOT2 . '/');
            exit;
        }
        $images = $this->Portfolio->getImages($id);

        // Passe bien $images à la vue
        $this->set(['item' => $item, 'images' => $images]);
        $this->render('portfolio_detail');
    }

    // AJAX pour upload image
public function ajaxAddPortfolioImage() {
    if ($this->Session->isLogged() && !empty($_POST['portfolio_id']) && !empty($_FILES['image'])) {
        $portfolio_id = intval($_POST['portfolio_id']);
        $file = $_FILES['image'];
        $targetDir = 'webroot/img/portfolio/';
        $ext = strtolower(pathinfo($file['name'], PATHINFO_EXTENSION));

        // Compte le nombre d'images déjà présentes pour ce projet
        $this->Portfolio->setTable('portfolio_image');
        $count = $this->Portfolio->findCount(['condition' => "portfolio_id = $portfolio_id"]);

        // Numéro suivant pour ce projet
        $num = $count + 1;

        // Nom du fichier : [idprojet]_[num].[ext]
        $fileName = $portfolio_id . '_' . $num . '.' . $ext;
        $targetPath = $targetDir . $fileName;

        // Si le fichier existe déjà, on incrémente jusqu'à trouver un nom libre
        while (file_exists($targetPath)) {
            $num++;
            $fileName = $portfolio_id . '_' . $num . '.' . $ext;
            $targetPath = $targetDir . $fileName;
        }

        if (move_uploaded_file($file['tmp_name'], $targetPath)) {
            $this->Portfolio->addImage($portfolio_id, $targetPath);
            echo json_encode(['status' => 'success', 'img_link' => $targetPath]);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Erreur upload']);
        }
    }
    die();
}

    // AJAX pour suppression image
    public function ajaxDeletePortfolioImage() {
        if ($this->Session->isLogged() && !empty($_POST['image_id'])) {
            $image_id = intval($_POST['image_id']);
            $this->Portfolio->setTable('portfolio_image');
            $img = $this->Portfolio->findfirst(['condition' => "id = $image_id"]);
            if ($img && file_exists($img->img_link)) {
                unlink($img->img_link);
            }
            $this->Portfolio->deleteImage($image_id);
            echo json_encode(['status' => 'success']);
        }
        die();
    }
    
    public function ajaxContactMessage() {
    if (
        !empty($_POST['name']) &&
        !empty($_POST['email']) &&
        !empty($_POST['subject']) &&
        !empty($_POST['message'])
    ) {
        $this->Portfolio->setTable('message');
        $data = [
            'name' => htmlspecialchars($_POST['name']),
            'email' => htmlspecialchars($_POST['email']),
            'subject' => htmlspecialchars($_POST['subject']),
            'content' => htmlspecialchars($_POST['message'])
        ];
        if ($this->Portfolio->save($data)) {
            echo json_encode(['status' => 'success', 'message' => 'Message enregistré !']);
        } else {
            echo json_encode(['status' => 'error', 'message' => 'Erreur lors de l\'enregistrement.']);
        }
    } else {
        echo json_encode(['status' => 'error', 'message' => 'Tous les champs sont obligatoires.']);
    }
    die();
}
}