<?php
class User extends Model {
    public $table = "users";

    function getUser($login, $password) {
        return $this->findfirst(array(
            'fields' => "*",
            'condition' => "username='".$login."' AND password='".hash('sha256', $password)."'",
            'limit' => 'LIMIT 1'
        ), PDO::FETCH_OBJ);
    }

    function getLastInsertId() {
        $sql = "SELECT MAX(id) AS last_id FROM ". $this->table;
        $stmt = $this->db->prepare($sql);
        if ($stmt->execute()) {
            return $stmt->fetchColumn();
        } else {
            echo "Erreur SQL lors de la récupération du dernier id utilisateurs.";
            return 0;
        }
    }
}