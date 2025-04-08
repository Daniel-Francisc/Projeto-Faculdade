<?php
    class Controller{
        public function pagina($pagina){
            session_start();
            require_once 'views/' . $pagina . '.php';
        }
    #region Cliente
        #úteis    
            public function validar_sessao()
            {
                //verificar variaveis de sessao
                if (!isset($_SESSION['Email']) and !isset($_SESSION['Senha'])) {
                    //acesso negado
                    header("location: view/frontCliente.php");
                }
            }

            public function validar_cliente($email, $senha){
                $obj = new Cliente();
                if($obj->validarCliente($email, $senha)){
                    session_start();
                    $_SESSION['Email'] = $email;
                    $_SESSION['Senha'] = $senha;
                    include_once 'view/frontCliente.php';
                }else{
                    include_once 'Principal.php';
                }
            }
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