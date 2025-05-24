<?php
class model {
    //propriétés
    public $id;
    public $table;
    public $conf="default";
    public $db;

    function __construct() {
        //on fait appel à notre configuration bdd par defaut
        $conf=conf::$databases[$this->conf];

        try {
            $this->db = new PDO(
                'mysql:host='.$conf['host'].
                ';dbname='.$conf['database'].';',
                $conf['login'],
                $conf['password'],
                array(	PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
                    PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
        } catch (PDOException $e) {
            print "Erreur !: " . $e->getMessage() . "<br/>";
            die();
        }

    }

    //read : un select sur la clé primaire
    function read( $fields=null ) {

        if ($fields==null) {
            $fields='*';
        }
        $sql="SELECT ".$fields." FROM " . $this->table ." WHERE id=:id";
        //echo $sql;
        $sth = $this->db->prepare($sql);
        if ($sth->execute(array(':id' => $this->id))) {
            $data = $sth->fetch(PDO::FETCH_OBJ);
            //echo "<PRE>";
            //print_r ($data);
            //echo "</PRE>";
            foreach ($data as $key=>$value) {
                //on peut ainsi créer à la volée les propriétés de la classe
                $this->$key = $value;
            }
        } else {
            echo "<br> Erreur SQL <br>";
        }
    }

    //find : tout select possible
    function find($data, $fetchMode = PDO::FETCH_OBJ) {
        $fields = '*';
        $join = '';
        $condition = '';
        $order = 'id';
        $limit = '';
    
        if (isset($data["fields"])) {
            $fields = $data["fields"];
        }
        if (isset($data["join"])) {
            $join = $data["join"];
        }
        if (isset($data["condition"])) {
            $condition = " AND " .  $data["condition"];
        }
        if (isset($data["order"])) {
            $order = $data["order"];
        }
        if (isset($data["limit"])) {
            $limit = $data["limit"];
        }
    
        $sql =
            "SELECT DISTINCT " . $fields .
            " FROM " . $this->table . " " .
            $join .
            " WHERE 1=1" . $condition .
            " ORDER BY " . $order .
            " " . $limit;

        //echo $sql;
        $sth = $this->db->prepare($sql);
        if ($sth->execute()) {
            return $sth->fetchAll($fetchMode);
        } else {
            echo "<br> Erreur SQL <br>";
        }
    }
    
    function findfirst($data, $fetchMode = PDO::FETCH_OBJ) {
        $results = $this->find($data, $fetchMode);
        return !empty($results) ? $results[0] : null;
    }
    

    function save($data) {
        try {
            // Si `id` est vide, on fait un INSERT
            if (empty($data['id'])) {
                unset($data['id']); // Assurez-vous que `id` n'est pas présent dans les données
                
                // Construction de la requête INSERT
                $columns = implode(",", array_keys($data));
                $placeholders = ":" . implode(", :", array_keys($data));
                $sql = "INSERT INTO " . $this->table . " ($columns) VALUES ($placeholders)";

                file_put_contents('debug_sql.txt', $sql . PHP_EOL, FILE_APPEND);
                // Ajout de la requête préparée pour le débogage
                file_put_contents('debug_sql.txt', "table: " . $this->table . "\n", FILE_APPEND);


                $sth = $this->db->prepare($sql);

                // Ajout des valeurs dans le tableau de données
                if ($sth->errorCode() !== '00000') {
                    file_put_contents('debug_sql.txt', print_r($sth->errorInfo(), true), FILE_APPEND);
                }
                
                // Exécution de la requête
                if ($sth->execute($data)) {
                    $this->id = $this->db->lastInsertId();
                    return true; // Succès
                } else {
                    throw new Exception("Erreur lors de l'insertion.");
                }
            } else {
                // Si `id` existe, on fait un UPDATE
                $this->id = $data['id'];
                unset($data['id']); // On ne met pas `id` dans les colonnes à mettre à jour
                
                // Construction de la requête UPDATE
                $fields = implode(", ", array_map(function ($key) {
                    return "$key = :$key";
                }, array_keys($data)));

                // Ajout de l'id dans les données
                $data['id'] = $this->id;

                $sql = "UPDATE " . $this->table . " SET $fields WHERE id = :id";

                // Ajout de la requête préparée pour le débogage
                file_put_contents('debug_sql.txt', "table: " . $this->table . "\n", FILE_APPEND);
                file_put_contents('debug_sql.txt', "DATA: " . print_r($data, true), FILE_APPEND);
                file_put_contents('debug_sql.txt', $sql . PHP_EOL, FILE_APPEND);
                
                $sth = $this->db->prepare($sql);
                
                // Exécution de la requête

                $result = $sth->execute($data);
                file_put_contents('debug_sql.txt', "EXECUTE RESULT: " . var_export($result, true) . PHP_EOL, FILE_APPEND);
                if ($result) {
                    return true;
                } else {
                    file_put_contents('debug_sql.txt', "PDO ERROR: " . print_r($sth->errorInfo(), true), FILE_APPEND);
                    throw new Exception("Erreur lors de la mise à jour.");
                }
            }
        } catch (Exception $e) {
            // Log l'erreur dans debug_sql.txt au lieu de l'afficher à l'écran
            file_put_contents('debug_sql.txt', "Erreur SQL : " . $e->getMessage() . PHP_EOL, FILE_APPEND);
            return false;
        }
    }
    

    //delete : un delete sur la clé primaire
    function delete() {
        $sql="DELETE  FROM " . $this->table ." WHERE id=:id";

        file_put_contents('debug_sql.txt', "table: " . $this->table . "\n", FILE_APPEND);
        file_put_contents('debug_sql.txt', $sql . PHP_EOL, FILE_APPEND);

        $sth = $this->db->prepare($sql);
        if ($sth->execute(array(':id' => $this->id))) {
            return true;
        } else {
            file_put_contents('debug_sql.txt', "Erreur SQL lors du DELETE sur la table " . $this->table . PHP_EOL, FILE_APPEND);
            return false;
        }
    }

   

}