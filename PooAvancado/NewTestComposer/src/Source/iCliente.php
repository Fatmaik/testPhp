<?php
namespace Source;
interface iCliente{
    public function selectAll();
    public function selectId();
    public function insert();
    public function update();
    public function delete();
}