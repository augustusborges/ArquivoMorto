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
                                Ata 28-09-2017 <small>Realinhamento do Projeto</small>
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
                                                <td>Lucas Simon</td>
                                                <td>FNS</td>
                                                <td>Presente</td>
                                            </tr>
                                            <tr>
                                                <td>Alexandre Borges</td>
                                                <td>FNS</td>
                                                <td>Presente</td>
                                            </tr>
                                            <tr>
                                                <td>Iriane</td>
                                                <td>Synergie</td>
                                                <td>Presente</td>
                                            </tr>
                                            <tr>
                                                <td>Marli</td>
                                                <td>Synergie</td>
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
									<strong>Lucas</strong> apresentou Alexandre como novo gerente de projeto da FNS.
                                </div>
								    <div class="alert alert-info">
									<strong>Marli e Iriane</strong> fizeram uma breve apresentação do projeto e de seu andamento. Foram discutidos possíveis ofensores do mesmo.
								</div>
                                    <div class="alert alert-info">
									<strong>Iriane</strong> apresentou o novo cronograma do projeto. Constatou-se que o mesmo já se encontra atrasado por premissas operacionais não cumpridas.
								</div>
                                    <div class="alert alert-info">
									<strong>Iriane</strong> se responsabilizou a passar o novo cronograma e a lista de premissas do mesmo na data de hoje 28-09-2017 para Alexandre.
								</div>
                                    <div class="alert alert-info">
									<strong>Marli e Iriani</strong> apresentaram que uma boa parte da fase 3 do projeto já está bem adiantada, não foi mensurado nesta reunião o percentual de conclusão do mesmo.
								    </div>
                                    <div class="alert alert-danger">
									<strong>Lucas</strong> divergiu da percepção da Marli/Iriane quanto ao tamanho do trabalho já realizado.
								    </div>
                                    <div class="alert alert-danger">
									<strong>Alexandre</strong> propôs um replanejamento do trabalho de condução do projeto implantando metodologia ágil para entrega do faltante do projeto.
								    </div>
                                    <div class="alert alert-danger">
									<strong>Alexandre</strong> propôs uma apresentação do que já se encontra implementado no projeto.
								    </div>
                                    <div class="alert alert-danger">
									<strong>Marli</strong> montará e apresentará uma agenda de trabalho para a semana que vem com o intuito de replanejamento do projeto, alinhamento de ferramentas e condução do projeto e remanufatura do cronograma contemplando o novo cenário. Além de determinar a forma de apresentação do que já está implementado.
								    </div>
                                    <div class="alert alert-danger">
									<strong>Marli</strong> sugeriu a utilização parcial das funcionalidades do sistema Sênior em detrimento às do sistema legado. Lucas achou que não há possibilidade. Decidiu-se que nas reuniões de trabalho faremos uma análise e simulação desta sugestão.
								    </div>
                                    <div class="alert alert-danger">
									<strong>Alexandre</strong> apresentou a agressão que o pagamento de 10 licenças do produto sem necessidade real no momento está causando no projeto, também o custo de hospedagem do mesmo.
								    </div>
                                    <div class="alert alert-danger">
									<strong>Alexandre</strong> solicitou a Marli que veja o barateamento do custo de manutenção das licenças e hospedagem, passando para apenas 1 num primeiro momento e sua incrementação até o final do projeto e o rateio do custo já infligido ao projeto pelo pagamento dessas licenças em forma de horas de consultoria. Marli ficou de avaliar internamente.
								    </div>
                                    <div class="alert alert-danger">
									<strong>Alexandre</strong> se colocou à disposição para disponibilizar todo e qualquer material necessário ao planejamento das reuniões de trabalho.
								    </div>  
                                    <div class="alert alert-danger">
									<strong>Marli e Iriane</strong> ficaram de disponibilizar tempo maior para replanejamento do projeto na semana que vem.
								    </div>
                                </div>
				            </div>
			             </div>
                    </div>    
                    
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
                                                <td>Criação de agenda de trabalho de replanejamento de projeto</td>
                                                <td>Marli</td>
                                                <td>29-09-2017</td>
                                            </tr>
                                            <tr>
                                                <td>Levantamento de material de apoio para apresentação do que já está funcional no sistema</td>
                                                <td>marli</td>
                                                <td>02-10-2017</td>
                                            </tr>
                                            <tr>
                                                <td>Envio de cronograma proposto e premissas de projeto</td>
                                                <td>Iriane</td>
                                                <td>28-09-2017</td>
                                            </tr>
                                            <tr>
                                                <td>Replanejamento financeiro do projeto</td>
                                                <td>Sponsors, Marli e Alexandre</td>
                                                <td>02-10-2017</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div><!--Participantes-->
                    
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