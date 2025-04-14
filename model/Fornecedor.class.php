<?php
class Fornecedor extends ConexaoEstoque{
    #region Atributos
        private $id;
        private $fornecedor;
        private $cnpj;
        private $email;
        private $contato;
    #endregion
    #region objetos
        public function getId()
        {
                return $this->id;
        }
        public function setId($id)
        {
                $this->id = $id;
        }
        public function getfornecedor()
        {
                return $this->fornecedor;
        }
        public function setfornecedor($fornecedor)
        {
                $this->fornecedor = $fornecedor;
        }
        public function getCnpj()
        {
                return $this->cnpj;
        }
        public function setCnpj($cnpj)
        {
                $this->cnpj = $cnpj;
        }
        public function getEmail()
        {
                return $this->email;
        }
        public function setEmail($email)
        {
                $this->email = $email;
        }
        public function getContato()
        {
                return $this->contato;
        }
        public function setContato($contato)
        {
                $this->contato = $contato;
        }
    #endregion
    #region atributos
        #region Inserir    
        public function inserirfornecedor($fornecedor, $cnpj, $email, $contato){
            $this->setfornecedor($fornecedor);
            $this->setEmail($email);
            $this->setCnpj($cnpj);
            $this->setContato($contato);

            $sql = "INSERT INTO tb_fornecedor VALUES (null,:fornecedor,:cnpj,:email,:contato)";
            
            try {
                $db  = $this->conectarEstoque();
                $query = $db->prepare($sql);
                $query->bindValue(':fornecedor',$this->getfornecedor(), PDO::PARAM_STR);
                $query->bindValue(':cnpj', $this->getCnpj(), PDO::PARAM_STR);
                $query->bindValue(':email',$this->getEmail(), PDO::PARAM_STR);
                $query->bindValue(':contato', $this->getContato(), PDO::PARAM_STR);
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
            public function consutarfornecedor($fornecedor){
                    $this->setfornecedor($fornecedor);
                    $sql = "SELECT * FROM tb_fornecedor where true ";

                    if ($this->getfornecedor() != null) {
                        $sql .= " and nome_fornecedor like :fornecedor";
                    }

                    $sql .= " order by nome_fornecedor";

                    try {
                        $bd = $this->conectarEstoque();
                        $query = $bd->prepare($sql);

                        if ($this->getfornecedor() != null) {
                            $this->setfornecedor("%" . $fornecedor . "%");
                            $query->bindValue(':fornecedor', $this->getfornecedor(), PDO::PARAM_STR);
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
            public function alterarfornecedor($id,$fornecedor){
                    $this->setId($id);
                    $this->setfornecedor($fornecedor);

                    $sql = "UPDATE tb_fornecedor SET nome_fornecedor = :fornecedor WHERE id_fornecedor = :id";

                    try {
                            $bd = $this->conectarEstoque();
                            $query = $bd->prepare($sql);
                            $query->bindValue(':id', $this->getId(), PDO::PARAM_INT);
                            $query->bindValue(':fornecedor', $this->getfornecedor(), PDO::PARAM_STR);
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
            public function excluirfornecedor($id){
                $this->setId($id);
            
                $sql = "DELETE FROM tb_fornecedor WHERE id_fornecedor = :id";
            
                try {
                    $bd = $this->conectarEstoque();
                    $query = $bd->prepare($sql);
                    $query->bindValue(':id', $this->getId(), PDO::PARAM_INT);
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