<?php

    //Validação de versão de browser
    include("../libraries/compatibilidade.php");
    

    require_once("../config/db.php");
    require_once("../classes/Login.php");
    $login = new Login();

    if ($login->isUserLoggedIn() == true) {
        include("logged_in.php");

    } 
    else {
        header('Location: ../index.php');
}
?>