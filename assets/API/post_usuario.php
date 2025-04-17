<?php
session_start();
//error_reporting(~E_ALL & ~E_NOTICE & ~E_WARNING);

include_once 'autoload.php';

if (isset($_GET['nome_usuario']) and isset($_GET['email_usuario']) and isset($_GET['senha_usuario']) and isset($_GET['id_cargo'])){
    try {
        $obj = new Usuario();
        $obj->inserirUsuario($_GET['nome_usuario'], $_GET['email_usuario'],$_GET['senha_usuario'],$_GET['id_cargo']);
        print json_encode(['Sucesso'=>true]);
    } catch (PDOException $e) {
        print json_encode(['error'=> $e->getMessage()]);
    }

}else{
    print json_encode(['error'=> "O nome do usuario é obrigatório"]);
}