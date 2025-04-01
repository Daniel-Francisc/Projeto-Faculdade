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
        #region Inserir    
            public function inserirCliente($nome, $sobrenome, $email, $senha, $dt_nascimento, $id_nivel){
                $this->setNome($nome);
                $this->setSobrenome($sobrenome);
                $this->setEmail($email);
                $this->setSenha($senha);
                $this->setDtInscricao($dt_nascimento);
                $this->setIdNivel($id_nivel);

                $sql = "INSERT INTO tb_cliente VALUES (null,:nome',':sobrenome',':email',:senha,:dtn,current_date(),null,null,:nivel)";
            
                try {
                    $bd = $this->conectarCliente();
                    $query = $bd->prepare($sql);
                    $query->bindValue(':nome',      $this->getNome(), PDO::PARAM_STR);
                    $query->bindValue(':sobrenome', $this->getSobrenome(), PDO::PARAM_STR);
                    $query->bindValue(':email',     $this->getEmail(), PDO::PARAM_STR);
                    $query->bindValue(':senha',     $this->getSenha(), PDO::PARAM_STR);
                    $query->bindValue(':dtn',       $this->getDtNascimento(), PDO::PARAM_STR);
                    $query->bindValue(':nivel',     $this->getIdNivel(), PDO::PARAM_STR);
                    $query->execute();
                    return true;
                } catch (PDOException $e) {
                    return false;
                }
            }
        #endregion

        #region Consultar    
            public function consutarCliente($id_cliente,$nome){
                $this->setIdCliente($id_cliente);
                $this->setNome($nome);
            
                $sql = "INSERT INTO tb_cliente VALUES (null,:nome',':sobrenome',':email',:senha,:dtn,current_date(),null,null,:nivel)";
            
                try {
                    $bd = $this->conectarCliente();
                    $query = $bd->prepare($sql);
                    $query->bindValue(':nome',      $this->getNome(), PDO::PARAM_STR);
                    $query->bindValue(':sobrenome', $this->getSobrenome(), PDO::PARAM_STR);
                    $query->bindValue(':email',     $this->getEmail(), PDO::PARAM_STR);
                    $query->bindValue(':senha',     $this->getSenha(), PDO::PARAM_STR);
                    $query->bindValue(':dtn',       $this->getDtNascimento(), PDO::PARAM_STR);
                    $query->bindValue(':nivel',     $this->getIdNivel(), PDO::PARAM_STR);
                    $query->execute();
                    return true;
                } catch (PDOException $e) {
                    return false;
                }
            }
        #endregion
    #endregion
}