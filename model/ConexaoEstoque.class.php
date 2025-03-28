<?php
class ConexaoEstoque{
    #region Atributos
        private $host = 'localhost';
        private $db = 'db_estoque';
        private $user = 'root';
        private $psw = '';
        private $link = null;
    #endregion

    #region Métodos
    public function conectarEstoque(){
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