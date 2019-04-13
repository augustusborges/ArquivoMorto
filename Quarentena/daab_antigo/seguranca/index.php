<?php

    //Validação de versão de browser
    include("libraries/compatibilidade.php");
    

    require_once("config/db.php");
    require_once("classes/Login.php");
    $login = new Login();

    if ($login->isUserLoggedIn() == true) {
        include("views/logged_in.php");

    } 
    else {
        header('Location: acesso.php');
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <title>daab - Área dos clientes</title>
    </head>
    <body>
        <div id=content>
            <nav>
                <a href="fns/novo_erp">FNS - Projeto Novo ERP - Documentação</a>
                <a href="fns/novo_erp">FNS - Projeto Novo ERP - Status Report</a>
            </nav>
        </div>
    </body>
</html>

