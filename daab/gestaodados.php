<?php

	include_once 'config.php';
?>
<!DOCTYPE html>
<html>
	<head>
    <meta charset="utf-8"/>
    <meta name="description" content="desenvolvimento de sistemas gerenciais"/>
    <meta name="keywords" content="ERP, Sistemas, Sites, Desenvolvimento"/>
    <meta name="author" content="Focus4 business Intelligence Ltda"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
        <title>d.a.a.b - Gestão de Dados</title>
        
        <links>
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="css/principal.css"/>   
            <link rel="stylesheet" href="css/header-menu.css"/>   
        </links> 
	</head>
	<body>
        <!-- Header -->
        <?php

            include_once BASE_DIR.'views'.DS.'cabecalho.html';
        ?>

		<!--Menu-->
		<?php

			include_once BASE_DIR.'views'.DS.'menu.html';
		?>

        <section id="parcerias">
            <img src="./images/sap_b1.png" class="parceiro" />
            <img src="./images/ramo.jpg" class="parceiro_um" />
        </section>

        <!-- Header -->
        <?php
          include_once BASE_DIR.'views'.DS.'rodape.html';
        ?>

		<!--Scripts-->
        <section id="scripts">
                <script src="js/jquery-3.3.1.min.js"></script> 
                <script src="js/skel.min.js"></script> 
                <script src="js/menu.js"></script> 

        </section>
	</body>
</html>