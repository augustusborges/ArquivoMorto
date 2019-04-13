<?php

    require_once 'config.php';
?>
<!DOCTYPE html>
<html>
    <head>
		<meta charset="utf-8"/>
		<meta name="description" content="desenvolvimento de sistemas gerenciais"/>
		<meta name="keywords" content="SAP, ERP, Business One, Sistemas, Sites, Desenvolvimento"/>
		<meta name="author" content="Focus4 Business Intelligence Ltda"/>
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        
        <title>d.a.a.b - Sistemas Gerenciais</title>
        
        <links>
        	<link rel="icon" href="favicon.ico" />
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="css/header-menu.css"/>   
            <link rel="stylesheet" href="css/main.css"/>   
            <link rel="stylesheet" href="css/principal.css"/>   
        </links>    
    </head>
    <body>
        <!-- Header -->
        <?php

            include_once BASE_DIR.'views'.DS.'cabecalho.html';
        ?>
		<!-- Nav -->
        <?php

            include_once BASE_DIR.'views'.DS.'menu.html';
        ?>

		<!-- Banner -->
        <section class="banner full">
				<article>
					<!--<img src="images/slide01.jpg" alt="" />-->
					<div class="inner">
						<header>
							<p>O ERP que cresce com o seu negócio <a href="gestaodados.php">conheça o SAP Business One</a></p>
							<!--<h2 class="daabfont">d.a.a.b</h2>-->
						</header>
					</div>
				</article>
				<article>
					<!--<img src="images/slide02.jpg" alt="" />-->
					<div class="inner">
						<header>
                            <p>Relacione-se com seus clientes, fornecedores e colaboradores <a href="">a qualquer tempo</a></p>
							<!--<h2 class="daabfont">d.a.a.b</h2>-->
						</header>
					</div>
				</article>
				<article>
					<!--<img src="images/slide03.jpg"  alt="" />-->
					<div class="inner">
						<header>
                            <p>Nos deixe <a href="">cuidar da sua marca</a> enquanto você foca no seu negócio</p>
							<!--<h2 class="daabfont">d.a.a.b</h2>-->
						</header>
					</div>
				</article>
				<article>
					<!--<img src="images/slide04.jpg"  alt="" />-->
					<div class="inner">
						<header>
							<p>Alinhe ações virtuais e presenciais com <a href="planejamentomarketing.php">Planejamento de marketing</a> sólido</p>
							<!--<h2 class="daabfont">d.a.a.b</h2>-->
						</header>
					</div>
				</article>
				<!--<article>
					<img src="images/slide05.jpg"  alt="" />
					<div class="inner">
						<header>
							<p>Ipsum dolor sed magna veroeros lorem ipsum</p>
							<h2>Lorem adipiscing</h2>
						</header>
					</div>
				</article>-->
		</section>
        

        <section id="parcerias">
            <img src="./images/sap_b1.png" class="parceiro" />
            <img src="./images/ramo.jpg" class="parceiro_um" />
        </section>

        <!-- Rodape -->
        <?php
		  include_once BASE_DIR.'views'.DS.'rodape.html';
        ?>
        

        <section id="scripts">
                <script src="js/jquery-3.3.1.min.js"></script> 
                <script src="js/jquery.scrollex.min.js"></script>
                <script src="js/skel.min.js"></script> 
                <script src="js/banner.js"></script> 
                <script src="js/util.js"></script> 
        </section>
    </body>
</html>