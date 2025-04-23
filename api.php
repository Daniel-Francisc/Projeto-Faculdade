<?php
header('Content-Type: application/json');
//error_reporting(~E_ALL & ~E_NOTICE & ~E_WARNING);

include_once 'autoload.php';
$method = $_SERVER['REQUEST_METHOD'];
$input = json_decode(file_get_contents('php://input'),true);
switch($method){
    case 'GET':
        try{
            $obj = new Usuario();
            $json = $obj->consutarUsuario($input['nome']);
            print json_encode($json);
        } catch(PDOException $e){
            print $e;
        }
        break;
    case 'POST':
        if (isset($input['nome_usuario']) and isset($input['email_usuario']) and isset($input['senha_usuario']) and isset($input['id_cargo'])){
            try {
                $obj = new Usuario();
                $obj->inserirUsuario($input['nome_usuario'], $input['email_usuario'],$input['senha_usuario'],$input['id_cargo']);
                print json_encode(['Sucesso'=>true]);
            } catch (PDOException $e) {
                print json_encode(['error'=> $e->getMessage()]);
            }
        
        }else{
            print json_encode(['error'=> "O nome do usuario é obrigatório"]);
        }
        break;
    case 'PUT':
        if (isset($input['nome_usuario']) and isset($input['id_usuario'])){
            try {
                $obj = new Usuario();
                $obj->alterarUsuario($input['id_usuario'],$input['nome_usuario']);
                print json_encode(['Sucesso'=>true]);
            } catch (PDOException $e) {
                print json_encode(['error'=> $e->getMessage()]);
            }
        }else{
            print json_encode(['error'=> "O nome do usuario é obrigatório"]);
        }
        break;
    case 'DELETE':
        if (isset($input['id_usuario'])){
            try {
                $obj = new Usuario();
                $obj->excluirUsuario($input['id_usuario']);
                print json_encode(['Sucesso'=>true]);
            } catch (PDOException $e) {
                print json_encode(['error'=> $e->getMessage()]);
            }
        
        }else{
            print json_encode(['error'=> "O usuario é obrigatório"]);
        }
    break;
}