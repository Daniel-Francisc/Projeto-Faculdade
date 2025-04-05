<?php
    class Controller{
        public function pagina($pagina){
            session_start();
            require_once 'views/' . $pagina . '.php';
        }
    #region Cliente
        #úteis
            
        #endregion

        #region Cliente SCUD
            public function inserir_cliente($nome, $email, $senha, $dt_nascimento){
                $obj = new Cliente();
                if ($obj->inserirCliente($nome, $email, $senha, $dt_nascimento) == true) {
                    session_start();
                    include_once 'principal.php';
                } else {
                    session_start();
                    include_once 'principal.php';
                    }
            }
        #endregion
    #endregion

        #region Modal
            
        #endregion
    }