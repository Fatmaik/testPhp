<?php

class Container{
    public static function getCurso() {
        return new Curso(self::getConexao());
    }
    public static function getConexao() {
        return new Conexao("mysql:dbname=prog;host=localhost", "root", "randid");
    }
}