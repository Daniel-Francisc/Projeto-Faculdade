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
            $obj->validar_cliente($email, $senha);
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