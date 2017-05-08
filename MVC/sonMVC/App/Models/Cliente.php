<?php

namespace App\Models\Cliente;

class Cliente extends \App\Conn {
    private $db;

    public function __construct() {
        $this->db = $this->getCon();
    }

    public function selectAll() {
        $query = $this->db->prepare("SELECT * FROM MVC1");
        return $query;
    }
}

/// arrrummar