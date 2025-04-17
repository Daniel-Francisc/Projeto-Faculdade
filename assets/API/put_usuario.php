<?php
session_start();
//error_reporting(~E_ALL & ~E_NOTICE & ~E_WARNING);

include_once 'autoload.php';

if (isset($_GET['nome_usuario']) and isset($_GET['id_usuario'])){
    try {
        $obj = new Usuario();
        $obj->alterarUsuario($_GET['id_usuario'],$_GET['nome_usuario']);
        print json_encode(['Sucesso'=>true]);
    } catch (PDOException $e) {
        print json_encode(['error'=> $e->getMessage()]);
    }

}else{
    print json_encode(['error'=> "O nome do usuario é obrigatório"]);
}