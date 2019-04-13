<?php

    require_once 'config.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8"/>
        <meta name="description" content="Planejamento Marketing, Marketing Digital, Criação site, Campanhas Redes Sociais"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"/>
        
        <title>Planejamento de Marketing</title>

        <link rel="stylesheet" href="css/bootstrap-min.css"/>
        <link rel="stylesheet" href="css/principal.css"/>
        <link rel="stylesheet" href="css/header-menu.css"/>
        <link rel="stylesheet" href="css/planejamentomarketing.css"/>
    </head>
    <body>
    	<!-- Cabeçalho -->
        <?php

            include_once BASE_DIR.'views'.DS.'cabecalho.html';
        ?>

		<!-- Menu -->
        <?php

            include_once BASE_DIR.'views'.DS.'menu.html';
        ?>
        
        <!-- Corpo -->
        <div class="container-fluid body_color">
            <div class="row" id="Cabecalho">
                <div class="col-sm-12">
                    <h1 class="center">Planejamento de Marketing</h1>
                    <h4  class="center">Conjunto de ações coordenadas visando alcançar um objetivo específico</h4>
                </div>
            </div>    
            
            <div class="row" id="ItemI">
                <div class="col-sm-12">
                    <img src="images/point.png" alt="" class="texto brilho posicao1">                    
                    <span class="texto brilho posicao11">Entender o Problema</span>

                    
                </div>
            </div>    
            
            <div class="row" id="ItemII">
                <div class="col-sm-12">
                    <img src="images/point.png" alt="" class="texto brilho posicao2">                    
                    <span class="texto brilho posicao21">Definir Objetivo Claro</span>
                </div>
            </div>               
            
            <div class="row" id="ItemIII">
                <div class="col-sm-12" onclick="alert('ai não aperta');">
                    <img src="images/point.png" alt="" class="texto brilho posicao3">                    
                    <span class="texto brilho posicao31">Aplicar Ações de Marketing</span>
                </div>
            </div> 
        </div>    
        
        <!-- Scripts -->
        <section id="scripts">
            <script src="js/jquery-3.3.1.min.js"></script> 
            <script src="js/jquery.scrollex.min.js"></script> 
            <script src="js/menu.js"></script> 
            <script src="js/util.js"></script> 
            <script src="js/bootstrap.min.js"></script>
        </section>
    </body>
</html>