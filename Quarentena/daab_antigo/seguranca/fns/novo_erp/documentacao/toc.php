<?php

    //Validação de versão de browser
    include("../../libraries/compatibilidade.php");
    

    require_once("../../config/db.php");
    require_once("../../classes/Login.php");
    $login = new Login();

    if ($login->isUserLoggedIn() == true) {
        include("../../views/logged_in.php");

    } 
    else {
        header('Location: ../../acesso.php');
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<script src="js/displayToc.js"></script>
<link rel="stylesheet" href="css/eacont.css" />
</head>
<body onload="tocInit()">
</body>
</html>