<?php
    class Controller{
        public function pagina($pagina){
            session_start();
            require_once 'views/' . $pagina . '.php';
        }
    #region Cliente
        #úteis    
            public function validar_cliente($email, $senha){
                $obj = new Cliente();
                if($obj->validarCliente($email, $senha) == true){
                    session_start();
                    $_SESSION['email'] = $email;
                    $_SESSION['perfil'] = $obj->sessaoCliente($email);
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
                print'<div class="bg-warning">';
                print'    <nav class="navbar">';
                print'        <div class="container-fluid navbar-brand">';
                print'            <div class="nav justify-content-center">';
                print'                <a class="navbar-brand" href="Principal.php">Olá '.$_SESSION['perfil'].'!</a>';
                print'            </div>';
                print'            <div class="d-grid gap-2 d-md-flex justify-content-md-end">';
                print'              <div class="dropdown-menu">';
                print'                  <button class="btn btn-dark  dropdown-toggle" type="button" name="entrarUsuario" data-bs-toggle="dropdown" aria-expanded="false"><i class="bi bi-box-arrow-right"></i> Perfil</button>';
                print'                  <ul class="dropdown-menu">';
                print'                      <li><a class="dropdown-item" href="#">Action</a></li>';
                print'                      <li><a class="dropdown-item" href="#">Another action</a></li>';
                print'                      <li><a class="dropdown-item" href="#">Something else here</a></li>';
                print'                  </ul>';
                print'              </div>';
                print'            </div>';
                print'        </div>';
                print'    </nav>';
                print'        <div class="row">';
                print'            <button class="text-bg-dark p-2 col-3">Dark with contrasting color</button>';
                print'            <button class="text-bg-warning p-2 col-3">Warning with contrasting color</button>';
                print'            <button class="text-bg-dark p-2 col-3">Dark with contrasting color</button>';
                print'            <button class="text-bg-warning p-2 col-3">Warning with contrasting color</button>';
                print'        </div>';
                print'</div>';
            }
        #endregion
    }

