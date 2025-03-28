<?php
class ConexaoCliente{
    #region Atributos
        private $host = 'localhost';
        private $db = 'db_cliente';
        private $user = 'root';
        private $psw = '';
        private $link = null;
    #endregion

    #region Métodos
    public function conectarCliente(){
        try{
            $pdo = new PDO("mysql:host={$this->host};dbname={$this->db}", "{$this->user}", "{$this->psw}");
            $this->link=$pdo;
            print 'Conectado!';
            return $this->link;
        }
        catch(PDOException $e){
            print $e;
        }
    }
}