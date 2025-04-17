<?php
    class Controller{
        public function pagina($pagina){
            session_start();
            $menu = $this->menu();
            require_once 'view/'.$pagina.'.php';
        }
        
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

        #region Cliente
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
            
        #region Produtos
            #region Dirtribuidora SCUD
                public function inserir_distribuidora($distribuidora, $cnpj, $email, $contato){
                    $obj = new Distribuidora();
                    if($obj->inserirDistribuidora($distribuidora, $cnpj, $email, $contato)){
                        session_start();
                        $menu = $this->menu();
                        include_once 'view/distribuidora.php';
                    }else{
                        session_start();
                        include_once 'view/distribuidora.php';
                    }
                }
                public function consultar_distribuidora($distribuidora){
                    $obj = new Distribuidora();
                    if($obj->consutarDistribuidora($distribuidora)){
                        session_start();
                        $menu = $this->menu();
                        $resultado = $obj->consutarDistribuidora($distribuidora);
                        include_once 'view/distribuidora.php';
                    }else{
                        session_start();
                        include_once 'view/distribuidora.php';
                    }
                }
                public function deletar_distribuidora($id){
                    $obj = new Distribuidora();
                    if($obj->excluirDistribuidora($id)){
                        session_start();
                        $menu = $this->menu();
                        include_once 'view/distribuidora.php';
                    }else{
                        session_start();
                        include_once 'view/distribuidora.php';
                    }
                }
                public function alterar_distribuidora($id,$distribuidora){
                    $obj = new Distribuidora();
                    if($obj->alterarDistribuidora($id,$distribuidora)){
                        session_start();
                        $menu = $this->menu();
                        include_once 'view/distribuidora.php';
                    }else{
                        session_start();
                        include_once 'view/distribuidora.php';
                    }
                }
            #endregion
            #region Produtos SCUD
                public function inserir_produto($produto,$descricao,$entrada,$id_distribuidora,$id_fornecedor,$v_uni,$v_total,$n_lote,$dt_validade,$cor){
                    $obj = new Estoque();
                    if ($obj->inserirProduto($produto,$descricao,$entrada,$id_distribuidora,$id_fornecedor,$v_uni,$v_total,$n_lote,$dt_validade,$cor)==true){
                        session_start();
                        $menu = $this->menu();
                        include_once 'produtos.php';
                    } else{
                        session_start();
                        include_once 'produtos.php';
                    }
                }
            #endregion
            #region Fornecedor SCUD
                public function inserir_fornecedor($fornecedor, $cnpj, $email, $contato){
                    $obj = new Fornecedor();
                    if($obj->inserirfornecedor($fornecedor, $cnpj, $email, $contato)){
                        session_start();
                        $menu = $this->menu();
                        include_once 'view/fornecedor.php';
                    }else{
                        session_start();
                        include_once 'view/fornecedor.php';
                    }
                }
                public function consultar_fornecedor($fornecedor){
                    $obj = new Fornecedor();
                    if($obj->consutarfornecedor($fornecedor)){
                        session_start();
                        $menu = $this->menu();
                        $resultado = $obj->consutarfornecedor($fornecedor);
                        include_once 'view/fornecedor.php';
                    }else{
                        session_start();
                        include_once 'view/fornecedor.php';
                    }
                }
                public function deletar_fornecedor($id){
                    $obj = new Fornecedor();
                    if($obj->excluirfornecedor($id)){
                        session_start();
                        $menu = $this->menu();
                        include_once 'view/fornecedor.php';
                    }else{
                        session_start();
                        include_once 'view/fornecedor.php';
                    }
                }
                public function alterar_fornecedor($id,$fornecedor){
                    $obj = new Fornecedor();
                    if($obj->alterarfornecedor($id,$fornecedor)){
                        session_start();
                        $menu = $this->menu();
                        include_once 'view/fornecedor.php';
                    }else{
                        session_start();
                        include_once 'view/fornecedor.php';
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
                        print'      <a class="navbar-brand" href="index.php?frontCliente">Olá '.$_SESSION['perfil'].'</a>';
                        print'      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">';
                        print'        <span class="navbar-toggler-icon"></span>';
                        print'      </button>';
                        print'      <div class="collapse navbar-collapse" id="navbarSupportedContent">';
                        print'        <ul class="navbar-nav me-auto mb-2 mb-lg-0">';
                        print'          <li class="nav-item">';
                        print'            <a class="nav-link active" aria-current="page" href="index.php?produtos"><i class="bi bi-cart-fill"></i> Produtos</a>';
                        print'          </li>';
                        print'          <li class="nav-item">';
                        print'            <a class="nav-link active" aria-current="page" href="index.php?fornecedor"><i class="bi bi-cart-fill"></i> Fornecedor</a>';
                        print'          </li>';
                        print'          <li class="nav-item">';
                        print'            <a class="nav-link active" aria-current="page" href="index.php?distribuidora"><i class="bi bi-cart-fill"></i> Distribuidora</a>';
                        print'          </li>';
                        print'          <li class="nav-item">';
                        print'            <a class="nav-link active" aria-current="page" href="index.php?usuario"><i class="bi bi-cart-fill"></i> Usuario</a>';
                        print'          </li>';
                        print'        </ul>';
                        print'      </div>';
                        print'    </div>';
                        print'</nav>';
                        break;
                    case 'Gerente':
                        print'<nav class="navbar navbar-expand-lg bg-warning">';
                        print'    <div class="container-fluid">';
                        print'      <a class="navbar-brand" href="index.php?frontCliente">Olá '.$_SESSION['perfil'].'</a>';
                        print'      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">';
                        print'        <span class="navbar-toggler-icon"></span>';
                        print'      </button>';
                        print'      <div class="collapse navbar-collapse" id="navbarSupportedContent">';
                        print'        <ul class="navbar-nav me-auto mb-2 mb-lg-0">';
                        print'          <li class="nav-item">';
                        print'            <a class="nav-link active" aria-current="page" href="index.php?produtos"><i class="bi bi-cart-fill"></i> Produtos</a>';
                        print'          </li>';
                        print'          <li class="nav-item">';
                        print'            <a class="nav-link active" aria-current="page" href="index.php?fornecedor"><i class="bi bi-cart-fill"></i> Fornecedor</a>';
                        print'          </li>';
                        print'          <li class="nav-item">';
                        print'            <a class="nav-link active" aria-current="page" href="index.php?distribuidora"><i class="bi bi-cart-fill"></i> Distribuidora</a>';
                        print'          </li>';
                        print'          <li class="nav-item">';
                        print'            <a class="nav-link active" aria-current="page" href="index.php?usuario"><i class="bi bi-cart-fill"></i> Usuario</a>';
                        print'          </li>';
                        print'        </ul>';
                        print'      </div>';
                        print'    </div>';
                        print'</nav>';
                        break;
                    default:
                        print'<nav class="navbar navbar-expand-lg bg-warning">';
                        print'    <div class="container-fluid">';
                        print'      <a class="navbar-brand" href="index.php?frontCliente">Olá '.$_SESSION['perfil'].'</a>';
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
            public function inserir_distribuidora_modal(){
                print '<div class="modal fade" id="novoDistribuidora" tabindex="-1" aria-labelledby="novoDistribuidora" aria-hidden="true">';
                print '  <div class="modal-dialog">';
                print '    <div class="modal-content">';
                print '      <div class="modal-header">';
                print '        <h1 class="modal-title fs-5" id="novoDistribuidora">Nova Distribuidora</h1>';
                print '        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
                print '      </div>';
                print '      <div class="modal-body">';
                print '      </div>';
                print '<form  method="post" action="index.php">';
                print '    <div class="container text-center">';
                print '        <label class="form-label">Distribuidora</label>';
                print '        <input type="text" class="form-control" name="distribuidora" required>';
                print '        <label class="form-label">cnpj</label>';
                print '        <input type="number" class="form-control" name="cnpj" required>';
                print '        <label class="form-label">email</label>';
                print '        <input type="email" class="form-control" name="email" required>';
                print '        <label class="form-label">Contato</label>';
                print '        <input type="number" class="form-control" name="contato" required>';
                print '        <div class="d-grid gap-2 col-6 mx-auto"><br>';
                print '            <button type="submit" name="inserir_distribuidora" class="btn btn-success"> Inserir</button>';
                print '        </div><br>';
                print '    </div>';
                print '</form>';
                print '    </div>';
                print '  </div>';
                print '</div>';
            }
            public function alterar_distribuidora_modal($id_distribuidora,$nome_distribuidora){
                print '<div class="modal fade" id="alterar_distribuidora'.$id_distribuidora.'" tabindex="-1" aria-labelledby="alterar_distribuidora'.$id_distribuidora.'" aria-hidden="true">';
                print '  <div class="modal-dialog">';
                print '    <div class="modal-content">';
                print '      <div class="modal-header">';
                print '        <h1 class="modal-title fs-5" id="alterar_distribuidora'.$id_distribuidora.'">Alterar Distribuidora</h1>';
                print '        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
                print '      </div>';
                print '      <div class="modal-body">';
                print '<form method="post" action="index.php">';
                print '  <div class="modal-body">';
                print '     <input type="text" class="form-control" name="nome_distribuidora" value="' . $nome_distribuidora . '">';
                print '  </div>';
                print '  <div class="modal-footer">';
                print '    <input type="hidden" name="id_distribuidora" value="' . $id_distribuidora . '">';
                print '    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>';
                print '    <button type="submit" name="alterar_distribuidora" class="btn btn-primary">Alterar</button>';
                print '  </div>';
                print '</form>';
                print '      </div>';
                print '    </div>';
                print '  </div>';
                print '</div>';
            }
            public function deletar_distribuidora_modal($id_distribuidora,$nome_distribuidora){
                print '<div class="modal fade" id="excluir_distribuidora'.$id_distribuidora.'" tabindex="-1" aria-labelledby="excluir_distribuidora'.$id_distribuidora.'" aria-hidden="true">';
                print '  <div class="modal-dialog">';
                print '    <div class="modal-content">';
                print '      <div class="modal-header">';
                print '        <h1 class="modal-title fs-5" id="novoDistribuidora'.$id_distribuidora.'">Deletar Distribuidora</h1>';
                print '        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
                print '      </div>';
                print '      <div class="modal-body">';
                print '<h2>'.$nome_distribuidora.'</h2>';
                print '      <br>Tem certeza que deseja excluir essa Distribuidora?<br>Essa ação não podera ser desfeita';
                print '<form method="post" action="index.php">';
                print ' <div class="modal-footer">';
                print '    <input type="hidden" name="id" value="' . $id_distribuidora . '">';
                print '    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>';
                print '    <button type="submit" name="excluir_distribuidora" class="btn btn-danger">Excluir</button>';
                print ' </div>';
                print '</form>';
                print '      </div>';
                print '    </div>';
                print '  </div>';
                print '</div>';
            }
            public function inserir_fornecedor_modal(){
                print '<div class="modal fade" id="novofornecedor" tabindex="-1" aria-labelledby="novofornecedor" aria-hidden="true">';
                print '  <div class="modal-dialog">';
                print '    <div class="modal-content">';
                print '      <div class="modal-header">';
                print '        <h1 class="modal-title fs-5" id="novofornecedor">Novo Fornecedor</h1>';
                print '        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
                print '      </div>';
                print '      <div class="modal-body">';
                print '      </div>';
                print '<form  method="post" action="index.php">';
                print '    <div class="container text-center">';
                print '        <label class="form-label">fornecedor</label>';
                print '        <input type="text" class="form-control" name="fornecedor" required>';
                print '        <label class="form-label">cnpj</label>';
                print '        <input type="number" class="form-control" name="cnpj" required>';
                print '        <label class="form-label">email</label>';
                print '        <input type="email" class="form-control" name="email" required>';
                print '        <label class="form-label">Contato</label>';
                print '        <input type="number" class="form-control" name="contato" required>';
                print '        <div class="d-grid gap-2 col-6 mx-auto"><br>';
                print '            <button type="submit" name="inserir_fornecedor" class="btn btn-success"> Inserir</button>';
                print '        </div><br>';
                print '    </div>';
                print '</form>';
                print '    </div>';
                print '  </div>';
                print '</div>';
            }
            public function alterar_fornecedor_modal($id_fornecedor,$nome_fornecedor){
                print '<div class="modal fade" id="alterar_fornecedor'.$id_fornecedor.'" tabindex="-1" aria-labelledby="alterar_distribuidora'.$nome_fornecedor.'" aria-hidden="true">';
                print '  <div class="modal-dialog">';
                print '    <div class="modal-content">';
                print '      <div class="modal-header">';
                print '        <h1 class="modal-title fs-5" id="alterar_fornecedor'.$id_fornecedor.'">Alterar Distribuidora</h1>';
                print '        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
                print '      </div>';
                print '      <div class="modal-body">';
                print '<form method="post" action="index.php">';
                print '  <div class="modal-body">';
                print '     <input type="text" class="form-control" name="nome_fornecedor" value="' . $nome_fornecedor . '">';
                print '  </div>';
                print '  <div class="modal-footer">';
                print '    <input type="hidden" name="id_fornecedor" value="' . $id_fornecedor . '">';
                print '    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>';
                print '    <button type="submit" name="alterar_fornecedor" class="btn btn-primary">Alterar</button>';
                print '  </div>';
                print '</form>';
                print '      </div>';
                print '    </div>';
                print '  </div>';
                print '</div>';
            }
            public function deletar_fornecedor_modal($id_fornecedor,$nome_fornecedor){
                print '<div class="modal fade" id="excluir_fornecedor'.$id_fornecedor.'" tabindex="-1" aria-labelledby="excluir_fornecedor'.$id_fornecedor.'" aria-hidden="true">';
                print '  <div class="modal-dialog">';
                print '    <div class="modal-content">';
                print '      <div class="modal-header">';
                print '        <h1 class="modal-title fs-5" id="deletarFornecedor'.$id_fornecedor.'">Deletar Fornecedor</h1>';
                print '        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>';
                print '      </div>';
                print '      <div class="modal-body">';
                print '<h2>'.$nome_fornecedor.'</h2>';
                print '      <br>Tem certeza que deseja excluir essa Fornecedora?<br>Essa ação não podera ser desfeita';
                print '<form method="post" action="index.php">';
                print ' <div class="modal-footer">';
                print '    <input type="hidden" name="id" value="' . $id_fornecedor . '">';
                print '    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>';
                print '    <button type="submit" name="excluir_fornecedor" class="btn btn-danger">Excluir</button>';
                print ' </div>';
                print '</form>';
                print '      </div>';
                print '    </div>';
                print '  </div>';
                print '</div>';
            }
            public function select_fornecedor(){
                $obj = new Fornecedor();
                $resultado = $obj->consutarfornecedor(null);
                print'<select class="form-select" aria-label="Default select example" name="selectfornecedor[]">';
                foreach($resultado as $key => $value){
                    print '<option value="' . $value->id_fornecedor . '">' . $value->nome_fornecedor . '</option>';
                }
                print'</select>';
            }
            public function select_distribuidora(){
                $obj = new Distribuidora();
                $resultado = $obj->consutarDistribuidora(null);
                print'<select class="form-select" aria-label="Default select example" name="selectdistribuidora[]">';
                foreach($resultado as $key => $value){
                    print '<option value="' . $value->id_distribuidora . '">' . $value->nome_distribuidora . '</option>';
                }
                print'</select>';
            }
    #endregion

    }
?>
