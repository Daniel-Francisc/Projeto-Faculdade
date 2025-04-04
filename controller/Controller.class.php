<?php
    class Controller{
        public function pagina($pagina){
            session_start();
            require_once 'views/' . $pagina . '.php';
        }
        
        public function inserir_cliente($nome, $email, $senha, $dt_nascimento){
            $obj = new Cliente();
            if ($obj->inserirCliente($nome, $email, $senha, $dt_nascimento) == true) {
                session_start();
                //$menu = $this->menu();
                } else {
                session_start();
                include_once 'view/consultar.php';
                }
            }
    }