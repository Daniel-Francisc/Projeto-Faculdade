<?php
    class Cliente extends ConexaoClients{
        #region Atributo
            private $id;
            private $nome;
            private $email;
            private $senha;
            private $id_privilegio;
        #endregion

        #region objetos

        #endregion

        #region Login 
            public function validarUsuario($email,$senha){
                $this->setEmail($email);
                $this->setSenha($senha);
            
                $sql = 'SELECT COUNT(*) AS q FROM tb_usuario WHERE email_usuario = :email and senha_usuario = :senha';
            
                try{
                        $db = $this->conectarUsuario();
                        $query=$db->prepare($sql);
                        $query->bindValue(':email', $this->getEmail(), PDO::PARAM_STR);
                        $query->bindValue(':senha', md5($this->getSenha()), PDO::PARAM_STR);
                        $query->execute();
                        $resultado = $query->fetchAll(PDO::FETCH_OBJ);
                
                        foreach ($resultado as $key => $valor) {
                            $quantidade = $valor->q;
                        }
                        if ($quantidade == 1) {
                            return true;
                        } else {
                            return false;
                        }                    
                    
                }catch(PDOException $e){
                        return false;
                }
            }
        #
        
        #region Sessão
            public function sessaoUsuario($email){
                    $this->setEmail($email);
            
                    $sql = 'SELECT descricao FROM tb_usuario left join tb_cargos on tb_usuario.id_cargo = tb_cargos.id_cargo WHERE email_usuario = :email';
            
                    try {
                            $db = $this->conectarUsuario();
                            $query = $db->prepare($sql);
                            $query->bindValue(':email', $this->getEmail(), PDO::PARAM_STR);
                            $query->execute();
                            $resultado = $query->fetchAll(PDO::FETCH_OBJ);
                            foreach ($resultado as $key => $valor) {
                                $perfil = $valor->descricao;
                            }
                            return $perfil;
                    } catch(PDOException){
                            return false;
                    }
            }    
        #endregion

        public function inserirUsuario($nome, $email, $senha, $cargo){
            $this->setNome($nome);
            $this->setEmail($email);
            $this->setSenha($senha);
            $this->setCargo($cargo);

            $sql = "INSERT INTO tb_usuario VALUES (null,:nome,:email,:senha,null,:cargo)";
            
            try {
                $db  = $this->conectarUsuario();
                $query = $db->prepare($sql);
                $query->bindValue(':nome',  $this->getNome(), PDO::PARAM_STR);
                $query->bindValue(':email', $this->getEmail(), PDO::PARAM_STR);
                $query->bindValue(':senha', md5($this->getSenha()), PDO::PARAM_STR);
                $query->bindValue(':cargo', $this->getCargo(), PDO::PARAM_STR);
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
            public function consutarUsuario($nome){
                    $this->setNome($nome);
                    $sql = "SELECT * FROM tb_usuario where true ";

                    if ($this->getNome() != null) {
                        $sql .= " and nome_usuario like :nome";
                    }

                    $sql .= " order by nome_usuario";

                    try {
                        $bd = $this->conectarUsuario();
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
            public function alterarUsuario($id,$nome){
                    $this->setId($id);
                    $this->setNome($nome);

                    $sql = "UPDATE tb_usuario SET nome_usuario = :nome WHERE id_usuario = :id";

                    try {
                            $bd = $this->conectarUsuario();
                            $query = $bd->prepare($sql);
                            $query->bindValue(':id', $this->getId(), PDO::PARAM_INT);
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
            public function excluirUsuario($id){
                $this->setId($id);
            
                $sql = "DELETE FROM tb_usuario WHERE id_usuario = :id";
            
                try {
                    $bd = $this->conectarUsuario();
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