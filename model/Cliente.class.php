<?php
class Cliente extends ConexaoCliente{
    #region Atributos
        private $id_cliente;
        private $nome;
        private $sobrenome;
        private $email;
        private $senha;
        private $dt_nascimento;
        private $dt_inscricao;
        private $exp_compra;
        private $pts_compras;
        private $id_nivel;
    #endregion

    #region Objetos
        public function getIdCliente()
        {
                return $this->id_cliente;
        }

        public function setIdCliente($id_cliente) 
        {
                $this->id_cliente = $id_cliente;
        }

        public function getNome()
        {
                return $this->nome;
        }

        public function setNome($nome) 
        {
                $this->nome = $nome;
        }

        public function getSobrenome()
        {
                return $this->sobrenome;
        }

        public function setSobrenome($sobrenome) 
        {
                $this->sobrenome = $sobrenome;
        }

        public function getEmail()
        {
                return $this->email;
        }

        public function setEmail($email) 
        {
                $this->email = $email;
        }

        public function getSenha()
        {
                return $this->senha;
        }

        public function setSenha($senha) 
        {
                $this->senha = $senha;         
        }

        public function getDtNascimento()
        {
                return $this->dt_nascimento;
        }

        public function setDtNascimento($dt_nascimento) 
        {
                $this->dt_nascimento = $dt_nascimento;
        }

        public function getDtInscricao()
        {
                return $this->dt_inscricao;
        }

        public function setDtInscricao($dt_inscricao) 
        {
                $this->dt_inscricao = $dt_inscricao;   
        }

        public function getExpCompra()
        {
                return $this->exp_compra;
        }

        public function setExpCompra($exp_compra) 
        {
                $this->exp_compra = $exp_compra;
        }

        public function getPtsCompras()
        {
                return $this->pts_compras;
        }

        public function setPtsCompras($pts_compras) 
        {
                $this->pts_compras = $pts_compras;
        }

        public function getIdNivel()
        {
                return $this->id_nivel;
        }

        public function setIdNivel($id_nivel) 
        {
                $this->id_nivel = $id_nivel;
        }
    #endregion

    #region Métodos
        
    #endregion
}