<?php
    class Estoque extends ConexaoEstoque{
        #region Atributo
            private $id;
            private $produto;
            private $descricao;
            private $entrada;
            private $id_distribuidora;
            private $id_fornecedor;
            private $v_uni;
            private $v_total;
            private $n_lote;
            private $dt_validade;
            private $cor;
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
            public function getProduto()
            {
                        return $this->produto;
            }
            public function setProduto($produto)
            {
                        $this->produto = $produto;
            }
            public function getDescricao()
            {
                        return $this->descricao;
            }
            public function setDescricao($descricao)
            {
                        $this->descricao = $descricao;
            }
            public function getEntrada()
            {
                        return $this->entrada;
            }
            public function setEntrada($entrada)
            {
                        $this->entrada = $entrada;
            }
            public function getIdDistribuidora()
            {
                        return $this->id_distribuidora;
            }
            public function setIdDistribuidora($id_distribuidora)
            {
                        $this->id_distribuidora = $id_distribuidora;
            }
            public function getIdFornecedor()
            {
                        return $this->id_fornecedor;
            }
            public function setIdFornecedor($id_fornecedor)
            {
                        $this->id_fornecedor = $id_fornecedor;
            }
            public function getVUni()
            {
                        return $this->v_uni;
            }
            public function setVUni($v_uni)
            {
                        $this->v_uni = $v_uni;
            }
            public function getVTotal()
            {
                        return $this->v_total;
            }
            public function setVTotal($v_total)
            {
                        $this->v_total = $v_total;
            }
            public function getNLote()
            {
                        return $this->n_lote;
            }
            public function setNLote($n_lote)
            {
                        $this->n_lote = $n_lote;
            }
            public function getDtValidade()
            {
                        return $this->dt_validade;
            }
            public function setDtValidade($dt_validade)
            {
                        $this->dt_validade = $dt_validade;
            }
            public function getCor()
            {
                        return $this->cor;
            }
            public function setCor($cor)
            {
                        $this->cor = $cor;
            }
        #endregion
        public function inserirProduto($produto, $descricao, $entrada, $id_distribuidora, $id_fornecedor,$v_uni,$v_total,$n_lote,$dt_validade,$cor){
            $this->setProduto($produto);
            $this->setDescricao($descricao);
            $this->setEntrada($entrada);
            $this->setIdDistribuidora($id_distribuidora);
            $this->setIdFornecedor($id_fornecedor);
            $this->setVUni($v_uni);
            $this->setVTotal($v_total);
            $this->setNLote($n_lote);
            $this->setDtValidade($dt_validade);
            $this->setCor($cor);

            $sql = "INSERT INTO tb_produto VALUES (null, :produto, :descricao, :entrada, :id_distribuidora, :id_fornecedor, :v_uni, :v_total, :n_lote, :dt_validade, :cor)";
            
            try {
                $db  = $this->conectarEstoque();
                $query = $db->prepare($sql);
                $query->bindValue(':produto',  $this->getProduto(), PDO::PARAM_STR);
                $query->bindValue(':descricao', $this->getDescricao(), PDO::PARAM_STR);
                $query->bindValue(':entrada', $this->getEntrada(), PDO::PARAM_STR);
                $query->bindValue(':id_distribuidora', $this->getIdDistribuidora(), PDO::PARAM_INT);
                $query->bindValue(':id_fornecedor', $this->getIdFornecedor(), PDO::PARAM_INT);
                $query->bindValue(':v_uni', $this->getVUni(), PDO::PARAM_STR);
                $query->bindValue(':v_total', $this->getVTotal(), PDO::PARAM_STR);
                $query->bindValue(':n_lote', $this->getNLote(), PDO::PARAM_STR);
                $query->bindValue(':dt_validade', $this->getDtValidade(), PDO::PARAM_STR);
                $query->bindValue(':cor', $this->getCor(), PDO::PARAM_INT);
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
            public function consutarEstoque($produto){
                    $this->setproduto($produto);
                    $sql = "SELECT * FROM tb_estoque where true ";

                    if ($this->getproduto() != null) {
                        $sql .= " and nome_produto like :produto";
                    }

                    $sql .= " order by nome_produto";

                    try {
                        $bd = $this->conectarEstoque();
                        $query = $bd->prepare($sql);

                        if ($this->getProduto() != null) {
                            $this->setProduto("%" . $produto . "%");
                            $query->bindValue(':produto', $this->getProduto(), PDO::PARAM_STR);
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
            public function alterarEstoque($id,$produto){
                    $this->setId($id);
                    $this->setProduto($produto);

                    $sql = "UPDATE tb_estoque SET nome_produto = :produto WHERE id_produto = :id";

                    try {
                            $bd = $this->conectarEstoque();
                            $query = $bd->prepare($sql);
                            $query->bindValue(':id', $this->getId(), PDO::PARAM_INT);
                            $query->bindValue(':produto', $this->getProduto(), PDO::PARAM_STR);
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
            public function excluirEstoque($id){
                $this->setId($id);
            
                $sql = "DELETE FROM tb_estoque WHERE id_produto = :id";
            
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
    }