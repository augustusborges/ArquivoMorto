<?php

    require_once("../../../libraries/password_compatibility_library.php");
    require_once("../../../config/db.php");
    require_once("../../../classes/Login.php");

    $login = new Login();

    if ($login->isUserLoggedIn() == true) {
        if($_SESSION['user_empresa'] != 'fns'){
            header('Location: ../../../index.php?logout');
        }
    }
    else{
        header('Location: ../../../index.php');
    }    
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <title>FNS - Projeto Novo ERP</title>

        <links>
        <!-- Bootstrap Styles-->
        <link href="../assets/css/bootstrap.css" rel="stylesheet" />
        <!-- FontAwesome Styles-->
        <link href="../assets/css/font-awesome.css" rel="stylesheet" />
        <!-- Morris Chart Styles-->
        <link href="../assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
        <!-- Custom Styles-->
        <link href="../assets/css/custom-styles.css" rel="stylesheet" />
        <!-- Google Fonts-->
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    </links>
    </head>

    <body>
    
        <!--Pagina-->
        <div id="wrapper">
            
            <!--Barra superior-->
            <?php include'../includes/barrasuperior.php'?>
        
            <!--Menu esquerdo-->
            <?php include'../includes/barralateral.php'?>
            
            
            <!--Miolo da pagina-->
            <div id="page-wrapper">
                <div id="page-inner">
                    <!--cabeçalho-->
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="page-header">
                                Ata 06-11-2017 <small>Utilização de Código de Barras</small>
                            </h1>
                        </div>
                    </div><!--cabeçalho-->
                    <!--Participantes-->
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="panel panel-default">
                            <div class="panel-heading">
                                Participantes
                            </div> 
                            <div class="panel-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-bordered table-hover">
                                        <thead>
                                            <tr>
                                                <th>Nome</th>
                                                <th>Empresa</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Marcelo Simon</td>
                                                <td>FNS</td>
                                                <td>Presente</td>
                                            </tr>
                                            <tr>
                                                <td>Roberto</td>
                                                <td>FNS</td>
                                                <td>Presente</td>
                                            </tr>
                                            <tr>
                                                <td>Diego</td>
                                                <td>FNS</td>
                                                <td>Presente</td>
                                            </tr>

                                            <tr>
                                                <td>Alexandre</td>
                                                <td>FNS</td>
                                                <td>Presente</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div><!--Participantes-->
                    <!--Assuntos Tratados-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">Assuntos Tratados</div>        
                                <div class="panel-body"> 
								    <div class="alert alert-info">
									<strong>Alexandre</strong> apresentou em linhas gerais o funcionamento do código DUM14.
                                    </div>
								    <div class="alert alert-info">
									<strong>Alexandre</strong> apresentou que o ideal é que todas as caixas cheguem etiquetadas com DUM 14.
								    </div>
                                    <div class="alert alert-info">
									<strong>Diego</strong> ressaltou o alto custo de etiquetar as caixas ao chegarem na FNS.
								    </div>
                                    <div class="alert alert-info">
									<strong>Marcelo</strong> solicitou a Thaissa que solicite a todos os fornecedores que etiquetem as caixas.
								    </div>
                                    <div class="alert alert-info">
									<strong>Marcelo</strong> definiu que se o fornecedor não possuir etiqueta poderemos enviar a ele para que imprima e etiquete a caixa.
								    </div>
                                    <div class="alert alert-info">
									<strong>Marcelo</strong> ponderou que poderá haver algum tipo de custo cobrado pelo fornecedor e que, caso haja, será analisado caso a caso.
								    </div>
                                    <div class="alert alert-info">
									<strong>Thaissa</strong> ficou responsável por retornar aos envolvidos conforme as negociações andarem com cada fornecedor.
								    </div>
                                    <div class="alert alert-info">
									Tomamos por premissa que todas as caixas chegarão etiquetadas.
								    </div>
                                    <div class="alert alert-info">
									<strong>Alexandre</strong> apresentou que embora seja possivel usar o mesmo código DUM14 para produtos mae e filhos o ideal é que cada filho possua seu código para maior controle interno dos estoques.
								    </div>
                                    <div class="alert alert-info">
									<strong>Marcelo</strong> questionou qual o range de numeração possível com a assinatura da GS1 no que foi informado de 99000 códigos.
								    </div>
                                    <div class="alert alert-info">
									<strong>Marcelo</strong> questionou o valor pago pela emissão de códigos a GS1 no que foi informado de que o valor é de aproximadamente R$3.600,00 pagos anualmente.
								    </div>
                                    <div class="alert alert-info">
									Caixas de produtos filhos receberão nova etiqueta DUM 14 (Etiqueta de identificação de produto filho) após o processo fabril.
								    </div>
                                    <div class="alert alert-info">
									<strong>Alexandre</strong> apresentou a possibilidade de utilização do código GS1-128 no que todos concordaram que não há necessidade de utilização que o jsutifique no momento..
								    </div>
                                </div>
				            </div>
			             </div>
                    </div><!--Assuntos-->    
                    <!--Proximos Passos-->
                    <div class="row">
                        <div class="col-md-12 col-sm-12 col-xs-12">
                            <div class="panel panel-default">
                            <div class="panel-heading">
                                Próximos Passos
                            </div> 
                                <div class="panel-body">
                                    <div class="table-responsive">
                                        <table class="table table-striped table-bordered table-hover">
                                            <thead>
                                                <tr>
                                                <th>O QUE</th>
                                                <th>QUEM</th>
                                                <th>QUANDO</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                <td>Tratativas com fornecedores para envio de caixas já com código de barras</td>
                                                <td>Thaissa</td>
                                                <td>???</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--Proximos-->
                </div><!--Miolo da pagina-->
            </div><!--Miolo-->
        </div><!--Pagina-->
        <scripts>
            <!-- jQuery Js -->
            <script src="../assets/js/jquery-1.10.2.js"></script>
            <!-- Bootstrap Js -->
            <script src="../assets/js/bootstrap.min.js"></script>
            <!-- Metis Menu Js -->
            <script src="../assets/js/jquery.metisMenu.js"></script>
            <!-- Custom Js -->
            <script src="../assets/js/custom-scripts.js"></script>
        </scripts>
    </body>
</html>