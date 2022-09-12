<?php 

    class homeController extends Controller
    {

        public function index() {

            $anuncios = new Anuncios();
            $usuarios = new Usuarios();

            $dados = array(
                'quantidade' => $anuncios->getQuantidade(),
                'nome' => $usuarios->getName()
            );

            $quantidade = 5;
            $nome = 'Guilherme';

            $this->loadTemplate('home', $dados);
            
        }

    }