<?php
session_start();
error_reporting(~E_ALL & ~E_NOTICE & ~E_WARNING);

include_once 'autoload.php';

$objController = new Controller();
if (isset($_POST['Entrar'])) {
    $objController->validar_sessao();
}

include_once 'router.php';

?>