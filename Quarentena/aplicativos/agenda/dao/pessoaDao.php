<?php

    include BASE_DIR.'dao'.DS.'conexao.php';

    class pessoaDao{
       
        //Insere um novo usuário no sistema
        public function inserePessoa($pessoa){
        
            //Abre conexao com banco de dados
            $conn = new conexao();
            $conexao = $conn->obterConexao();
            $sucesso = false;

            if (!$conexao->set_charset("utf8")) {
                echo $conexao->error;
            }
            
            //Se a conexão com o banco for bem sucedida
            if (!$conexao->connect_errno) {
                
                //Se não houver email identico ao informado na base de dados
                if(!$this->validaPessoa($pessoa->emailPessoa)){
                
                    //cadastra a pessoa na base de dados
                    $sql = "INSERT INTO pessoa 
                            (nomepessoa, senhapessoa, tipopessoa, emailpessoa)
                            VALUES('" 
                            .$pessoa->nomePessoa 
                            ."', '" 
                            .$pessoa->senhaPessoa 
                            ."', " 
                            .$pessoa->tipoPessoa 
                            .", '" 
                            .$pessoa->emailPessoa
                            ."');";
            
                    $exec = $conexao->query($sql);

                    if($exec)
                        $sucesso = true;
            
                    mysqli_close($conexao);
                }
                else{
                    //O que fazer se houver cliente cadastrado com email???
                }
            }
            else{
                echo "<h4 class='error'> Erro: "
                    . $conexao->connect_errno
                    ."</h4>";
            }
            return $sucesso;
        }

        //Verifica se já existe email igual ao informado cadastrado no sistema
        //Retorna objeto pessoa caso existe e false caso não exista
        public function validaPessoa($email){
        
        //Abre conexao com banco de dados
        $conn = new conexao();
        $conexao = $conn->obterConexao();
        $PessoaCadastrada = new pessoa();
        
        if (!$conexao->set_charset("utf8")) {
            echo $conexao->error;
        }
            
        //Se a conexão com o banco for bem sucedida
        if (!$conexao->connect_errno) {
            $sql = "SELECT idpessoa, nomepessoa, emailpessoa, senhapessoa, tipopessoa 
                    FROM pessoa 
                    WHERE emailpessoa = '" . $email . "';";
            
            $exec = $conexao->query($sql);

            if ( $f = $exec->fetch_object() )
            {
                $PessoaCadastrada->idPessoa = $f->idpessoa;
                $PessoaCadastrada->nomePessoa = $f->nomepessoa;
                $PessoaCadastrada->emailPessoa = $f->emailpessoa;
                $PessoaCadastrada->senhaPessoa = $f->senhapessoa;
                $PessoaCadastrada->tipoPessoa = $f->tipopessoa;
            }
            
            mysqli_close($conexao);
        }
        else{
            echo "<h4 class='error'> Erro: "
                . $conexao->connect_errno
                ."</h4>";
        }
        
        return $PessoaCadastrada;

            
        }

    }
    
?>