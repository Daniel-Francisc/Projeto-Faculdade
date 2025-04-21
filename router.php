<?php
    #region Não sei o que é mas é obigatório!!!
        //pegar a url
        $url = explode('?', $_SERVER['REQUEST_URI']);
        //escolher na variável $url do link desejado
        $pagina = $url[1];

        #ROTAS DE REDIRECIONAMENTO
        //redirecionar para pagina informada
        if (isset($pagina)) {
            $objController = new Controller();
            $objController->pagina($pagina);
        }
    #endregion

#region Cliente
    #region Entrar Cliente
        if (isset($_POST['Entrar'])) {
            $obj = new Controller();
            $email = htmlspecialchars($_POST['Email']);
            $senha = htmlspecialchars($_POST['Senha']);
            $obj->validar($email, $senha);
        }
    #endregion

    #region Inserir Cliente
        if (isset($_POST['inserir_cliente'])){
            $obj = new Controller();
            $nome = htmlspecialchars($_POST['nomeCliente']);
            $nome = ucwords($nome);
            $email = htmlspecialchars($_POST['emailCliente']);
            $senha = htmlspecialchars($_POST['senhaCliente']);
            $dt_nascimento = htmlspecialchars($_POST['dtnCliente']);
            $obj->inserir_cliente($nome, $email, $senha, $dt_nascimento);
        }
    #endregion

    #region Alterar Cliente
        if (isset($_POST['alterar_cliente'])){
            $obj = new Controller();
            $nome = htmlspecialchars($_POST['nomeCliente']);
            $email = htmlspecialchars($_POST['emailCliente']);
            $senha = htmlspecialchars($_POST['senhaCliente']);
            $dt_nascimento = htmlspecialchars($_POST['dtnCliente']);
        }
    #endregion
    
    #region Deletar Cliente
        if (isset($_POST['deletar_cliente'])){
            $obj = new Controller();
            $nome = htmlspecialchars($_POST['nomeCliente']);
            $email = htmlspecialchars($_POST['emailCliente']);
            $senha = htmlspecialchars($_POST['senhaCliente']);
            $dt_nascimento = htmlspecialchars($_POST['dtnCliente']);
        }
    #endregion

    #region Consultar Cliente
        if (isset($_POST['consultar_cliente'])){
            $obj = new Controller();
            $nome = htmlspecialchars($_POST['nomeCliente']);
            $email = htmlspecialchars($_POST['emailCliente']);
            $senha = htmlspecialchars($_POST['senhaCliente']);
            $dt_nascimento = htmlspecialchars($_POST['dtnCliente']);
        }
    #endregion
#endregion

#region Produtos
    #region Inserir produto
        if (isset($_POST['inserir_produto'])){
            $obj = new controller;
            $produto = htmlspecialchars($_POST['produto']);
            $descricao = htmlspecialchars($_POST['descricao']);
            $entrada = htmlspecialchars($_POST['entrada']);
            $qtd_produto = htmlspecialchars($_POST['qtd']);
            $id_distribuidora = $_POST['selectdistribuidora'];
            $id_fornecedor = $_POST['selectfornecedor'];
            $v_total = htmlspecialchars($_POST['v_total']);
            $v_uni = $v_total/$qtd_produto;
            $n_lote = htmlspecialchars($_POST['n_lote']);
            $dt_validade = htmlspecialchars($_POST['dt_validade']);
            $obj->inserir_produto($produto,$descricao,$entrada,$qtd_produto,$id_distribuidora,$id_fornecedor,$v_uni,$v_total,$n_lote,$dt_validade);
        }
        if (isset($_POST['consultar_produto'])){
            $obj = new controller;
            $produto = htmlspecialchars($_POST['produto']);
            $obj->consultar_produto($produto);
        }

        if (isset($_POST['excluir_produto'])){
            $obj = new controller;
            $id = htmlspecialchars($_POST['id']);
            $obj->deletar_produto($id);
        }
        if (isset($_POST['alterar_produto'])){
            $obj = new controller;
            $id = htmlspecialchars($_POST['id_produto']);
            $produto = htmlspecialchars($_POST['nome_produto']);
            $obj->alterar_produto($id,$produto);
        }
    #endregion
    #region inserir distribuidora
    if (isset($_POST['inserir_distribuidora'])){
        $obj = new controller;
        $distribuidora = htmlspecialchars($_POST['distribuidora']);
        $cnpj = htmlspecialchars($_POST['cnpj']);
        $email = htmlspecialchars($_POST['email']);
        $contato = htmlspecialchars($_POST['contato']);
        $obj->inserir_distribuidora($distribuidora, $cnpj, $email, $contato);
    }
    #endregion
    #region consultar distribuidora
    if (isset($_POST['consultar_distribuidora'])){
        $obj = new controller;
        $distribuidora = htmlspecialchars($_POST['distribuidora']);
        $obj->consultar_distribuidora($distribuidora);
    }
    #endregion
    #region alterar distribuidora
    if (isset($_POST['excluir_distribuidora'])){
        $obj = new controller;
        $id = htmlspecialchars($_POST['id']);
        $obj->deletar_distribuidora($id);
    }
    #endregion
    #region deletar distribuidora
    if (isset($_POST['alterar_distribuidora'])){
        $obj = new controller;
        $id = htmlspecialchars($_POST['id_distribuidora']);
        $distribuidora = htmlspecialchars($_POST['nome_distribuidora']);
        $obj->alterar_distribuidora($id,$distribuidora);
    }
    #endregion
    #region inserir distribuidora
    if (isset($_POST['inserir_fornecedor'])){
        $obj = new controller;
        $fornecedor = htmlspecialchars($_POST['fornecedor']);
        $cnpj = htmlspecialchars($_POST['cnpj']);
        $email = htmlspecialchars($_POST['email']);
        $contato = htmlspecialchars($_POST['contato']);
        $obj->inserir_fornecedor($fornecedor, $cnpj, $email, $contato);
    }
    #endregion
    #region consultar fornecedor
    if (isset($_POST['consultar_fornecedor'])){
        $obj = new controller;
        $fornecedor = htmlspecialchars($_POST['fornecedor']);
        $obj->consultar_fornecedor($fornecedor);
    }
    #endregion
    #region alterar fornecedor
    if (isset($_POST['excluir_fornecedor'])){
        $obj = new controller;
        $id = htmlspecialchars($_POST['id']);
        $obj->deletar_fornecedor($id);
    }
    #endregion
    #region deletar fornecedor
    if (isset($_POST['alterar_fornecedor'])){
        $obj = new controller;
        $id = htmlspecialchars($_POST['id_fornecedor']);
        $fornecedor = htmlspecialchars($_POST['nome_fornecedor']);
        $obj->alterar_fornecedor($id,$fornecedor);
    }
    #endregion
#endregion