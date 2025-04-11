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
            $obj->inserir_cliente($nome, $email, $senha, $dt_nascimento);
        }
    #endregion
    
    #region Deletar Cliente
        if (isset($_POST['deletar_cliente'])){
            $obj = new Controller();
            $nome = htmlspecialchars($_POST['nomeCliente']);
            $email = htmlspecialchars($_POST['emailCliente']);
            $senha = htmlspecialchars($_POST['senhaCliente']);
            $dt_nascimento = htmlspecialchars($_POST['dtnCliente']);
            $obj->inserir_cliente($nome, $email, $senha, $dt_nascimento);
        }
    #endregion

    #region Consultar Cliente
        if (isset($_POST['consultar_cliente'])){
            $obj = new Controller();
            $nome = htmlspecialchars($_POST['nomeCliente']);
            $email = htmlspecialchars($_POST['emailCliente']);
            $senha = htmlspecialchars($_POST['senhaCliente']);
            $dt_nascimento = htmlspecialchars($_POST['dtnCliente']);
            $obj->inserir_cliente($nome, $email, $senha, $dt_nascimento);
        }
    #endregion
#endregion

#region Produtos
    #region Inserir produto
        if (isset($_POST['inserir_cliente'])){
            $obj = new controller;
            $produto = htmlspecialchars($_POST['produto']);
            $descricao = htmlspecialchars($_POST['descricao']);
            $entrada = htmlspecialchars($_POST['entrada']);
            $id_distribuidora = htmlspecialchars($_POST['id_distribuidora']);
            $id_fornecedor = htmlspecialchars($_POST['id_fornecedor']);
            $v_uni = htmlspecialchars($_POST['v_uni']);
            $v_total = htmlspecialchars($_POST['v_total']);
            $n_lote = htmlspecialchars($_POST['n_lote']);
            $dt_validade = htmlspecialchars($_POST['dt_validade']);
            $obj->inserir_produto($produto,$descricao,$entrada,$id_distribuidora,$id_fornecedor,$v_uni,$v_total,$n_lote,$dt_validade);
        }
    #endregion
#endregion