<?php
session_start();
//error_reporting(~E_ALL & ~E_NOTICE & ~E_WARNING);

include_once 'autoload.php';
try{
    $obj = new Cliente();
    $json = $obj->consutarCliente(null,null);
    header('Content-Type: application/json');
    print json_encode($json);
} catch(PDOException $e){
    print $e;
}