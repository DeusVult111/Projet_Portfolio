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
        $sql = "UPDATE {$this->table} SET {$field} = :value WHERE id = :id";
        $this->query($sql, ['value' => $value, 'id' => $id]);
    }
}