<?php 

    class galeriaController extends Controller
    {

        public function index() {

            $dados = array(
                'qt' => 130
            );

            $this->loadTemplate('galeria',$dados);
            
        }

    }