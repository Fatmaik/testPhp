<?php

class Contas extends Connect{

    public function getNome() {
        $array = array();
        $sql = $this->db->query("SELECT * FROM test1");

        if($sql->rowCount() > 0) {
            $array = $sql->fetchAll();
        }
        
        return $array;
    }
}