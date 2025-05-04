<?php
class Portfolio extends Model {
    public $table = "portfolio";
    var $Portfolio;

    // Récupérer les sections du portfolio
    function getSections() {
        return $this->find(array(
            "fields" => "*",
            "order" => "id ASC"
        ));
    }

    // Mise à jour d'un champ spécifique d'une section
    function updateField($id, $field, $value) {
        $sql = "UPDATE " . $this->table . " SET " . $field . " = :value WHERE id = :id";
        $sth = $this->db->prepare($sql);
        return $sth->execute([':value' => $value, ':id' => $id]);
    }
}