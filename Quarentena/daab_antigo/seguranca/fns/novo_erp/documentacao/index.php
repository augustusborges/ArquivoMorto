<?php

    //Validação de versão de browser
    include("../../../libraries/compatibilidade.php");
    

    require_once("../../../config/db.php");
    require_once("../../../classes/Login.php");
    $login = new Login();

    if ($login->isUserLoggedIn() == true) {
        include("../../../views/logged_in.php");

    } 
    else {
        header('Location: ../../../acesso.php');
}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Novo EAP</title>
<link href="css/ea.css" rel="stylesheet" type="text/css" />
<script language="JavaScript" src="js/displayToc.js" type="text/javascript"></script>
</head>
<body onload="initLoad(this,'toc.php','blank.php')" onresize="resizePage()">
<div class="IndexTitle">
	Novo EAP
</div>
<div class="IndexHeader" id="IndexHeader">
	<img src="images/ea.gif" align="right" alt="Enterprise Architect" />
</div>
<noscript>
	<div class="NoScript">
		It appears that you may have Javascript disabled.
	</div>
</noscript>
</body>
</html>