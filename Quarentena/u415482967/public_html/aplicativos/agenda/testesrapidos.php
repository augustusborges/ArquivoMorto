<?php
    require 'config.php';
    require BASE_DIR.'lib'.DS.'utils.php';
    require BASE_DIR.'model'.DS.'pessoa.php';
    
    

    $Pessoa = new pessoa();
    $Pessoa->emailPessoa = "ale@ale.com";
    $Pessoa->senhaPessoa ="123456";
    $logado = $Pessoa->fazerLogin(true);

    if($logado['sucesso']){
        echo '1'.'<br/>';
        echo $logado['mensagem'];
    }
    else{
        echo '2'.'<br/>';
        echo $logado['mensagem'];
    }
        
?>