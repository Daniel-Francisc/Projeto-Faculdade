<?php
session_start();
//error_reporting(~E_ALL & ~E_NOTICE & ~E_WARNING);

include_once 'autoload.php';
try{
    $obj = new Fornecedor();
    $fonercedores = $obj->consutarfornecedor(null,null);
    header('Content-Type: application/json');
    print json_encode($fonercedores);
} catch(PDOException $e){
    print $e;
}