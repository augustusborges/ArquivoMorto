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
                                Ata 29-09-2017 <small>Planejamento das Pendências FNS no Projeto</small>
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
									<strong>Alexandre</strong> propôs que uma vez recebida a lista de premissas/pendências da Synergie o projeto será conduzido internamente em três frentes distintas:
	                                    <br/>1ª. Validando o que já está disponível dos processos Sênior
	                                    <br/>2ª. Replanejando com a Sênior a condução do restante do projeto.
                                        <br/>3ª. De forma independente das outras duas estudar a automatização dos processos de importação dos dados entre os sistemas.
                                    </div>
								    <div class="alert alert-danger">
									<strong>Lucas</strong> apresentou que  que para o cadastro de produtos ainda possuímos três grandes pendências internas:
                                        <br/>Disponibilização dos dados fiscais por famílias de produto;
                                        <br/>Definição de código de barras para os produtos filhos; e 
                                        <br/>As medidas dos produtos.
								    </div>
                                    <div class="alert alert-info">
									<strong>Lucas</strong> definiu que o responsável pela disponibilização das medidas será o Bruno e que até quarta-feira o material deverá estar disponibilizado.
								</div>
                                    <div class="alert alert-info">
									<strong>Alexandre</strong>  ficou responsável por alinhar a entrega do serviço com o Bruno.
								    </div>
                                    <div class="alert alert-info">
									<strong>Lucas</strong> definiu que para o andamento dos dados de código de barras será necessária uma reunião envolvendo Roberto, Fernando, Alexandre e Lucas. Nesta reunião seria de grande valia a presença de um consultor da GS1.
								    </div>
                                    <div class="alert alert-info">
									<strong>Alexandre</strong> ficou responsável por agendar a reunião sobre código de barras com os citados e tentar trazer o consultor GS1.
								</div>
                                    <div class="alert alert-info">
									<strong>Alexandre</strong> ficou responsável por passar para Lucas o que é necessário de dados fiscais para o mesmo poder providenciar as informações.
								</div>
                                    <div class="alert alert-danger">
									<strong>Lucas</strong> A questão de cadastro de dados fiscais para produtos está emperrada na questão da reestruturação fiscal da empresa e até quarta-feira que vem 04-08-2017 deveremos ter novos capítulos. Fica este como um ponto de alerta como grande ofensor do projeto uma vez que ainda não tempos como definir datas.
								</div>
                                    <div class="alert alert-info">
									<strong>Lucas</strong> definiu que a questão de cadastro de tabela de preços por cliente  deverá ser tratada com o Marcelo e o Roberto. Alexandre ficou responsável pelo agendamento de conversa com os mesmos.
								</div>
                                    <div class="alert alert-info">
									<strong>Lucas</strong> ficou responsável pelo envio dos dados de contato dos citados nesta ata para o Alexandre poder dar seguimento com o agendamento dos trabalhos.
                                    </div>
                                    <div class="alert alert-info">
									<strong>Lucas</strong> definiu que para as questões de chão de fábrica o responsável deverá ser o Roberto e a Helena.
                                    </div>
                                    <div class="alert alert-info">
									<strong>Lucas</strong> definiu que para os processos de compra e venda o responsável deverá ser o Roberto.
                                    </div>
                                    <div class="alert alert-info">
									<strong>Lucas</strong> definiu que para os processos financeiros, de tesouraria e de contas a pagar o responsável deverá ser o próprio Lucas.
                                    </div>
                                    <div class="alert alert-info">
									<strong>Alexandre</strong> ficou responsável de entender melhor sobre Engenharia de produto e serviço e customizações.
                                    </div>
                                    <div class="alert alert-info">
									<strong>Alexandre</strong> ficou responsável pela disponibilização de material de treinamento para a validação dos processos Sênior disponíveis.
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
                                                <td>Alinhamento entrega dos dados de medidas do produto</td>
                                                <td>Alexandre</td>
                                                <td>29-09-2017</td>
                                            </tr>
                                            <tr>
                                                <td>Agendamento reunião sobre código de barras</td>
                                                <td>Alexandre</td>
                                                <td>29-09-2017</td>
                                            </tr>
                                            <tr>
                                                <td>Tratativa da presença do consultor GS1</td>
                                                <td>Alexandre</td>
                                                <td>04-10-2017</td>
                                            </tr>
                                            <tr>
                                                <td>Envio dos dados de contatos </td>
                                                <td>Lucas</td>
                                                <td>29-09-2017</td>
                                            </tr>     
                                                <tr>
                                                <td>Envio dos dados de cadastro fiscal </td>
                                                <td>Alexandre</td>
                                                <td>03-10-2017</td>
                                            </tr> 
                                            <tr>
                                                <td>Disponibilização das conversas gravadas sobre o projeto</td>
                                                <td>Lucas</td>
                                                <td>02-10-2017</td>
                                            </tr>                                      
                                            <tr>
                                                <td>Disponibilização de material e agendamento de treinamentos para validação dos processos Sênior</td>
                                                <td>Alexandre</td>
                                                <td>06-10-2017</td>
                                            </tr>                                       
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div><!--Participantes-->
                </div>  
        </div><!--Miolo da pagina-->
        
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