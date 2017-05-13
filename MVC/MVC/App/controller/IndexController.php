<?php

namespace App\controller;

class IndexController extends Controller{

    public function index() {
        include '../App/view/index.phtml'; 
    }
    public function empresa() {
        include '../App/view/empresa.phtml';
    }
}