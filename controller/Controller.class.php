<?php
    class Controller{
        public function pagina($pagina){
            session_start();
            require_once 'views/' . $pagina . '.php';
        }
    #region Cliente
        #úteis
            public function validar($email, $senha){
                $objCliente = new Cliente();
                $objUsuario = new Usuario();
                if($objCliente->validarCliente($email, $senha) == true){
                    session_start();
                    $_SESSION['email'] = $email;
                    $_SESSION['perfil'] = $objCliente->sessaoCliente($email);
                    $menu = $this->menu();
                    //print 'Não erro...';die();
                    include_once 'view/frontCliente.php';
                }elseif($objUsuario->validarUsuario($email, $senha) == true){
                    session_start();
                    $_SESSION['email'] = $email;
                    $_SESSION['perfil'] = $objUsuario->sessaoUsuario($email);
                    $menu = $this->menu();
                    //print 'Não erro...';die();
                    include_once 'view/frontCliente.php';
                }else{
                    //print "error...";die();
                    include_once 'Principal.php';
                }
            }

        #endregion

        #region Cliente SCUD
            public function inserir_cliente($nome, $email, $senha, $dt_nascimento){
                $obj = new Cliente();
                if ($obj->inserirCliente($nome, $email, $senha, $dt_nascimento) == true) {
                    session_start();
                    $menu = $this->menu();
                    include_once 'Principal.php';
                } else {
                    session_start();
                    include_once 'Principal.php';
                    }
            }
        #endregion
    #endregion
        #region Modal & Semelhantes
            public function menu(){
                switch($_SESSION['perfil']){
                    case 'Administrador':
                        print'<nav class="navbar navbar-expand-lg bg-warning">';
                        print'    <div class="container-fluid">';
                        print'      <a class="navbar-brand" href="#">Olá '.$_SESSION['perfil'].'</a>';
                        print'      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">';
                        print'        <span class="navbar-toggler-icon"></span>';
                        print'      </button>';
                        print'      <div class="collapse navbar-collapse" id="navbarSupportedContent">';
                        print'        <ul class="navbar-nav me-auto mb-2 mb-lg-0">';
                        print'          <li class="nav-item">';
                        print'            <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-cart-fill"></i> Produtos</a>';
                        print'          </li>';
                        print'          <li class="nav-item">';
                        print'            <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-cart-fill"></i> Usuario</a>';
                        print'          </li>';
                        print'        </ul>';
                        print'      </div>';
                        print'    </div>';
                        print'</nav>';
                        break;
                    case 'Gerente':
                        print'<nav class="navbar navbar-expand-lg bg-warning">';
                        print'    <div class="container-fluid">';
                        print'      <a class="navbar-brand" href="#">Olá '.$_SESSION['perfil'].'</a>';
                        print'      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">';
                        print'        <span class="navbar-toggler-icon"></span>';
                        print'      </button>';
                        print'      <div class="collapse navbar-collapse" id="navbarSupportedContent">';
                        print'        <ul class="navbar-nav me-auto mb-2 mb-lg-0">';
                        print'          <li class="nav-item">';
                        print'            <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-cart-fill"></i> Meu carrinho</a>';
                        print'          </li>';
                        print'      </div>';
                        print'    </div>';
                        print'</nav>';
                        break;
                    default:
                        print'<nav class="navbar navbar-expand-lg bg-warning">';
                        print'    <div class="container-fluid">';
                        print'      <a class="navbar-brand" href="#">Olá '.$_SESSION['perfil'].'</a>';
                        print'      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">';
                        print'        <span class="navbar-toggler-icon"></span>';
                        print'      </button>';
                        print'      <div class="collapse navbar-collapse" id="navbarSupportedContent">';
                        print'        <ul class="navbar-nav me-auto mb-2 mb-lg-0">';
                        print'          <li class="nav-item">';
                        print'            <a class="nav-link active" aria-current="page" href="#"><i class="bi bi-cart-fill"></i> Meu carrinho</a>';
                        print'          </li>';
                        print'      </div>';
                        print'    </div>';
                        print'</nav>';
                        break;
                }
            }
        #endregion
    }