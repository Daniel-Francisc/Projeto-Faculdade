<?php
include_once 'ConexaoCliente.class.php';
class Cliente extends ConexaoCliente{
    #region Atributos
        private $id_cliente;
        private $nome;
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
        #region seção usuario
        public function sessãoCliente($nome){
                $this->setNome($nome);

                $sql = 'SELECT nome FROM tb_cliente WHERE nome = :nome';

                try {
                        $db = $this->conectarCliente();
                        $query = $db->prepare($sql);
                        $query->bindValue(':nome', $this->getNome(), PDO::PARAM_STR);
                        $query->execute();
                        $resultado = $query->fetchAll(PDO::FETCH_OBJ);
                        foreach ($resultado as $key => $valor) {
                            $perfil = $valor->perfil;
                        }
                        return $perfil;
                } catch(PDOException){
                        return false;
                }
        }    
        #endregion
        
        #region Inserir    
            public function inserirCliente($nome, $email, $senha, $dt_nascimento){
                $this->setNome($nome);
                $this->setEmail($email);
                $this->setSenha($senha);
                $this->setDtNascimento($dt_nascimento);

                $sql = "INSERT INTO tb_cliente VALUES (null,:nome,:email,:senha,:dtn,current_date(),0,0,1)";
                
                try {
                    $db  = $this->conectarCliente();
                    $query = $db->prepare($sql);
                    $query->bindValue(':nome',  $this->getNome(), PDO::PARAM_STR);
                    $query->bindValue(':email', $this->getEmail(), PDO::PARAM_STR);
                    $query->bindValue(':senha', md5($this->getSenha()), PDO::PARAM_STR);
                    $query->bindValue(':dtn', $this->getDtNascimento(), PDO::PARAM_STR);
                    $query->execute();
                    //print "Feito";
                        
                    return true;
                } catch (PDOException $e) {
                        print $e;
                        return false;
                }
            }
        #endregion

        #region Consultar    
                public function consutarCliente($nome){
                        $this->setNome($nome);
                        $sql = "SELECT * FROM tb_cliente where true ";

                        if ($this->getNome() != null) {
                            $sql .= " and nome like :nome";
                        }

                        $sql .= " order by nome";

                        try {
                            $bd = $this->conectarCliente();
                            $query = $bd->prepare($sql);

                            if ($this->getNome() != null) {
                                $this->setNome("%" . $nome . "%");
                                $query->bindValue(':nome', $this->getNome(), PDO::PARAM_STR);
                            }

                            $query->execute();
                            $resultado = $query->fetchAll(PDO::FETCH_OBJ);
                            
                            return $resultado;

                        } catch (PDOException $e) {
                                print $e;
                                return false;
                        }
                }
        #endregion

        #region Alterar
                public function alterarCliente($id_cliente,$nome){
                        $this->setIdCliente($id_cliente);
                        $this->setNome($nome);

                        $sql = "UPDATE tb_cliente SET nome = :nome WHERE id_cliente = :id_cliente";

                        try {
                                $bd = $this->conectarCliente();
                                $query = $bd->prepare($sql);
                                $query->bindValue(':id_cliente', $this->getIdcliente(), PDO::PARAM_INT);
                                $query->bindValue(':nome', $this->getNome(), PDO::PARAM_STR);
                                $query->execute();
                                print "Feito";

                                return true;

                        } catch (PDOException $e) {
                                print $e;
                                return false;
                        }
                }
        #endregion

        #region Deletar
                public function excluirCliente($id_cliente){
                    $this->setIdCliente($id_cliente);
                
                    $sql = "DELETE FROM tb_cliente WHERE id_cliente = :id_cliente";
                
                    try {
                        $bd = $this->conectarCliente();
                        $query = $bd->prepare($sql);
                        $query->bindValue(':id_cliente', $this->getIdCliente(), PDO::PARAM_INT);
                        $query->execute();
                        print "Feito";

                        return true;
                
                    } catch (PDOException $e) {
                        print $e;
                        return false;
                    }
                }
        #endregion
    #endregion
}