<?php
class Distribuidora extends ConexaoEstoque{
    #region Atributos
        private $id;
        private $distribuidora;
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
        public function getDistribuidora()
        {
                return $this->distribuidora;
        }
        public function setDistribuidora($distribuidora)
        {
                $this->distribuidora = $distribuidora;
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
        public function inserirDistribuidora($distribuidora, $cnpj, $email, $contato){
            $this->setDistribuidora($distribuidora);
            $this->setEmail($email);
            $this->setCnpj($cnpj);
            $this->setContato($contato);

            $sql = "INSERT INTO tb_distribuidora VALUES (null,:distribuidora,:cnpj,:email,:contato)";
            
            try {
                $db  = $this->conectarEstoque();
                $query = $db->prepare($sql);
                $query->bindValue(':distribuidora',$this->getDistribuidora(), PDO::PARAM_STR);
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
            public function consutarDistribuidora($distribuidora){
                    $this->setDistribuidora($distribuidora);
                    $sql = "SELECT * FROM tb_distribuidora where true ";

                    if ($this->getDistribuidora() != null) {
                        $sql .= " and nome_distribuidora like :distribuidora";
                    }

                    $sql .= " order by nome_distribuidora";

                    try {
                        $db = $this->conectarEstoque();
                        $query = $db->prepare($sql);

                        if ($this->getDistribuidora() != null) {
                            $this->setDistribuidora("%" . $distribuidora . "%");
                            $query->bindValue(':distribuidora', $this->getDistribuidora(), PDO::PARAM_STR);
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
            public function alterarDistribuidora($id,$distribuidora){
                    $this->setId($id);
                    $this->setDistribuidora($distribuidora);

                    $sql = "UPDATE tb_distribuidora SET nome_distribuidora = :distribuidora WHERE id_distribuidora = :id";

                    try {
                            $bd = $this->conectarEstoque();
                            $query = $bd->prepare($sql);
                            $query->bindValue(':id', $this->getId(), PDO::PARAM_INT);
                            $query->bindValue(':distribuidora', $this->getDistribuidora(), PDO::PARAM_STR);
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
            public function excluirDistribuidora($id){
                $this->setId($id);
            
                $sql = "DELETE FROM tb_distribuidora WHERE id_distribuidora = :id";
            
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