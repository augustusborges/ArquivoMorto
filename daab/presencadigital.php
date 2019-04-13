<?php

	include_once 'config.php';
?>
<!DOCTYPE html>
<html>
	<head>
        <meta charset="utf-8"/>
        <meta name="description" content=""/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/>
        
        <title>d.a.a.b - Presença Digital</title>
        
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

		<div>Criação de Sites</div>
		<div>Intra e extranets</div>


		<!--Scripts-->
        <section id="scripts">
                <script src="js/jquery.min.js"></script> 
                <script src="js/jquery.scrollex.min.js"></script> 
                <script src="js/skel.min.js"></script> 
                <script src="js/banner.js"></script> 
                <script src="js/util.js"></script> 
                <script src="js/bootstrap.min.js"></script>
        </section>
	</body>
</html>