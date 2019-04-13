<?php
    require_once("classe.php");
    
    $classe = new classe();
    
    $classe->id = 10;
    $classe->nome = "Alexandre Borges";

    $lixo = $classe;

    echo $lixo->id." ---- ".$lixo->nome; 

?>
<!DOCTYPE html>
<html>

    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1"/> 
        <title>daab - Estudos</title>
        
        <link rel="stylesheet" href="css/bootstrap.css"/>
        <link rel="stylesheet" href="css/principal.css"/>        
    </head>  
    
    <body>
        <div class="container-fluid body_color">
            <h4>Linha 1</h4>
            <hr class="linha"/>
        </div>    
        
        <section id=scripts>
            <script src="js/jquery.js"></script>
            <script src="js/bootstrap.js"></script>
        </section>
    </body>

</html>




<?php
/*
 	//Recebe o caminho completo de chamada da pagina, obtem o nome do arquivo e faz importação conforme necessário
	if(isset($_SERVER['HTTP_REFERER'])){
		$origem = $_SERVER['HTTP_REFERER'];
		$posicao = strripos($origem, "/") +1;
		$arquivo = substr($origem, $posicao);
	
		if($arquivo == "index.php"){
			require_once("../../config/db_local.php");
		}else{
			require_once("../../config/db_local.php");
		}
	}else{
		require_once("../../config/db_local.php");
	}	
    
    */
?>