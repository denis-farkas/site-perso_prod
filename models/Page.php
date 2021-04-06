<?php

class Page {
    private $db;
    public function __construct() {
        $this->db = new Database;
    }

    //module search recherche mots clé
    public function search($mot){
        $this->db->query('SELECT * FROM recherche WHERE mot LIKE CONCAT(:partial, "%")  LIMIT 3');
        $this->db->bind(':partial', $mot);
        $result = $this->db->resultSet();
        return $result;
    }

}