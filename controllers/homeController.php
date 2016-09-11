<?php
class homeController extends controller {

    public function __construct() {
        parent::__construct();
    }

    public function index() {
        $dados = array();
        
        $fotos = new Fotos();
        
        //rodar o metodo para salvar fotos
        $fotos->saveFotos();
        //pegar fotos do banco
        $dados['fotos'] = $fotos->getFotos();
        
        $this->loadTemplate('home', $dados);
    }

}