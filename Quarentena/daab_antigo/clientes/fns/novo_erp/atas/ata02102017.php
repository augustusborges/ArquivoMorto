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
                                Ata 02-10-2017 <small>Realinhamento Técnico do Projeto</small>
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
                                                <td>Marli Queiroz</td>
                                                <td>Synergie</td>
                                                <td>Presente</td>
                                            </tr>
                                            <tr>
                                                <td>Iriane Prata</td>
                                                <td>Synergie</td>
                                                <td>Presente</td>
                                            </tr>
                                            <tr>
                                                <td>Marcio Melo</td>
                                                <td>Synergie</td>
                                                <td>Presente</td>
                                            </tr>
                                            <tr>
                                                <td>Daniel</td>
                                                <td>Synergie</td>
                                                <td>Presente</td>
                                            </tr>
                                            <tr>
                                                <td>Marcel</td>
                                                <td>Synergie</td>
                                                <td>Presente</td>
                                            </tr>
                                            <tr>
                                                <td>João</td>
                                                <td>Synergie</td>
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
									<strong>João</strong> apresentou a lista de tarefas do projeto e o status de cada uma delas.
                                    </div>
								    <div class="alert alert-danger">
									<strong>Alexandre</strong> constatou a partir da lista que temos três grandes pendencias do lado FNS: A definição dos dados fiscais/contábeis, testes de layout com banco Itaú e definição de layout de EDI para transportadoras.
								    </div>
                                    <div class="alert alert-danger">
									<strong>Alexandre</strong> constatou que faltam 11 testes de validação de tarefas.
								    </div>
                                    <div class="alert alert-danger">
									<strong>Alexandre</strong> constatou que de 12 melhorias solicitadas temos: 1 em andamento, 7 a serem realizadas, 5 prontas aguardando validação. Conforme documento FNS_Alinhamento_ 02102017.
								    </div>
                                    <div class="alert alert-danger">
									<strong>Alexandre</strong> constatou que está faltando sinergia entre equipes além de uma grande dificuldade de comunicação. O projeto não possui um dicionário único em que todas as pontas se baseiem.
								    </div>
                                    <div class="alert alert-danger">
									<strong>Alexandre</strong> constatou que não há nenhum tipo de documentação das funcionalidades e melhorias solicitadas para o projeto além de falta de documentação de processos já discutidos pelas partes.
								    </div>
                                    <div class="alert alert-danger">
									<strong>Alexandre</strong> ficou responsável pela elaboração de plano de trabalho e confecção de cronograma prévio de trabalho FNS para criação do macro cronograma do projeto.
								    </div>
                                    <div class="alert alert-danger">
									<strong>Alexandre</strong> constatou que os treinamentos realizados não surtiram efeito e que não houve entrosamento entre equipes para maximização da utilização desta ferramenta.
								    </div>
                                    <div class="alert alert-info">
									<strong>Marcio</strong> solicitou a formalização de liberação dos acessos EAD ao Lucas e se responsabilizou em liberar os mesmos junto a Sênior.
								    </div>
                                    <div class="alert alert-info">
									<strong>Marcio</strong> solicitou a formalização para revisão dos custos de licenças ao Lucas e se responsabilizou por apresentar alternativas até a quinta-feira desta semana.
								    </div>
                                    <div class="alert alert-info">
									<strong>Alexandre</strong> constatou que embora haja várias pendencias de validação de tarefas a melhor forma de validação do sistema é por processo porque já valida um pool de tarefas interdependentes além de firmar na cabeça do cliente a forma de utilização do sistema.
								    </div>
                                    <div class="alert alert-danger">
									<strong>Alexandre</strong> apresentou que a validação das tarefas do projeto será replanejada levando em consideração a qualificação da equipe de validação por processo.
								    </div>
                                    <div class="alert alert-danger">
									<strong>Alexandre</strong> constatou que para as tarefas a serem realizadas há a necessidade de realinhamento e revalidação antes das mesmas entrarem na linha de produção.
								    </div>
                                    <div class="alert alert-info">
									<strong>Alexandre</strong> solicitou que nenhuma ação seja realizada no projeto sem sua prévia autorização. Isso pela necessidade de controle rigoroso dos recursos do projeto.
								    </div>
                                </div>
				            </div>
			             </div>
                    </div><!--Assuntos Tratados-->    
                    
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
                                                <td>Apresentação de estratégia de condução do projeto e Cronograma Preliminar</td>
                                                <td>Alexandre</td>
                                                <td>03-10-2017</td>
                                            </tr>
                                            <tr>
                                                <td>Envio do de para entre lista de pendencias e DFPs</td>
                                                <td>Iriane</td>
                                                <td>02-10-2017</td>
                                            </tr>
                                            <tr>
                                                <td>Envio da lista de andamento das tarefas do projeto</td>
                                                <td>Iriane</td>
                                                <td>02-10-2017</td>
                                            </tr>
                                            <tr>
                                                <td>Envio de e-mail de solicitação de redução de custos, rateio de custo por licenças já pagas e liberação de material de treinamento EAD</td>
                                                <td>Lucas</td>
                                                <td>02-10-2017</td>
                                            </tr>
                                            <tr>
                                                <td>Apresentar a solução para redução de licenças e rateio do custo de hospedagem e de custos já desembolsados por licenças</td>
                                                <td>Marcio</td>
                                                <td>05-10-2017</td>
                                            </tr>
                                            <tr>
                                                <td>Tomada de decisão GO/NOGO do projeto </td>
                                                <td>Lucas</td>
                                                <td>06-10-2017</td>
                                            </tr>                                            
                                        </tbody>
                                    </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div><!--Proximos Passos-->
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