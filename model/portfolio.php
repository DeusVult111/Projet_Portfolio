<?php
class Portfolio extends Model {
    public $table = "portfolio";

    // Récupérer toutes les sections du portfolio
    function getSections() {
        return $this->find(array(
            "fields" => "*",
            "order" => "id ASC"
        ));
    }

    // Récupérer une section spécifique
    function getSectionById($id) {
        return $this->findFirst(array(
            "conditions" => "id = :id",
            "bind" => array("id" => $id)
        ));
    }
}