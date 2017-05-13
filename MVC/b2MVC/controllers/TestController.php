<?php

class TestController extends Controller {

        // acessar na url o controller test, fara com que seja acessado este index
        public function index() {
            echo "teste teste teste";
        }
        // acessar test/aa ira retornar este metodo
        public function aa() {
            echo "aaa";
        }
}