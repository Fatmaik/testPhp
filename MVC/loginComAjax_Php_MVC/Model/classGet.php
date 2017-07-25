<?php
class classGet extends Connect {

    public function selAll() {
        $query = $this->db->prepare("SELECT * FROM test1");
        $query->execute();
        $sel = $query->fetchAll(\PDO::FETCH_ASSOC);
        return json_encode($sel);
    }
}
// $Con = new ClassConnect();
// $classGet = new ClassGet($Con);
