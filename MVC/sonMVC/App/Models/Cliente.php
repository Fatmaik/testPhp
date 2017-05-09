<?php

namespace App\Models\Cliente;


class Cliente {
    private $db;

    public function __construct(\PDO $db) {
        $this->db = $db;
    }

    public function selectAll() {
        $query = $this->db->prepare("SELECT * FROM MVC1");
        return $query;
    }
}