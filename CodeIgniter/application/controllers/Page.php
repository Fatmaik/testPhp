<?php

class Page extends CI_Controller {

    // metodo de action da rota por padrao informa o index se nao tiver action setado
    public function Index() {

        echo "Page::Index()";
    }

    // setando uma Action. ao acessar page/view a url passara a mostrar oq tem dentro deste metodo
    public function View() {
        
        echo "Page::View()";
    }

}