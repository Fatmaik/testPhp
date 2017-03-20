<?php
namespace Source;
interface iCliente{
    public function selectAll();
    public function selectId($id);
    public function insert($nome, $sobrenome,$email, $id);
    public function update($nome,$sobrenome, $email, $id);
    public function delete($id);
}