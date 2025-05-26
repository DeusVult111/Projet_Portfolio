<?php
class Portfolio extends Model {
    public $table; // La table sera définie dynamiquement

    // Définir dynamiquement la table cible
    public function setTable($tableName) {
        $this->table = $tableName;
    }

    // Récupérer toutes les sections de la table définie
    function getSections() {
        return $this->find(array(
            "fields" => "*",
            "order" => "id ASC"
        ));
    }

    // Récupérer une section spécifique de la table définie
    function getSectionById($id) {
        return $this->findFirst(array(
            "conditions" => "id = :id",
            "bind" => array("id" => $id)
        ));
    }

    // Mettre à jour un champ spécifique dans la table définie
    public function updateField($id, $field, $value) {
        $data = [
            'id' => $id,
            $field => $value
        ];

        if ($this->save($data)) {
            return true;
        } else {
            throw new Exception("Erreur lors de la mise à jour du champ $field pour l'ID $id.");
        }
    }

    // Supprimer un item par son id dans la table courante
    public function deleteItem($id) {
        $this->id = $id;
        if ($this->delete()) {
            return true;
        } else {
            throw new Exception("Erreur lors de la suppression de l'item avec l'ID $id.");
        }
    }

    public function getPortfolioItemById($id) {
        $this->setTable('portfolio_item');
        return $this->findfirst([
            'condition' => "id = $id"
        ]);
    }

    public function getImages($portfolio_id) {
    $this->setTable('portfolio_image');
    return $this->find(['condition' => "portfolio_id = $portfolio_id", 'order' => 'id ASC']);
    }

    public function addImage($portfolio_id, $img_link) {
        $this->setTable('portfolio_image');
        return $this->save(['portfolio_id' => $portfolio_id, 'img_link' => $img_link]);
    }

    public function deleteImage($id) {
        $this->setTable('portfolio_image');
        $this->id = $id;
        return $this->delete();
    }

public function findCount($params = []) {
    $data = [
        'fields' => 'COUNT(*) as cnt'
    ];
    if (!empty($params['condition'])) {
        $data['condition'] = $params['condition'];
    }
    $result = $this->find($data);
    return isset($result[0]->cnt) ? intval($result[0]->cnt) : 0;
}

}