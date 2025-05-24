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

}