<?php

    require_once("../../libraries/password_compatibility_library.php");
    require_once("../../config/db.php");
    require_once("../../classes/Login.php");

    $login = new Login();

    if ($login->isUserLoggedIn() == true) {
        if($_SESSION['user_empresa'] != 'fns'){
            header('Location: ../../index.php?logout');
        }
    }
    else{
        header('Location: ../../index.php');
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
            <link href="assets/css/bootstrap.css" rel="stylesheet" />
            <!-- FontAwesome Styles-->
            <link href="assets/css/font-awesome.css" rel="stylesheet" />
            <!-- Morris Chart Styles-->
            <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
            <!-- Custom Styles-->
            <link href="assets/css/custom-styles.css" rel="stylesheet" />
            <!-- Google Fonts-->
            <link href='http://fonts.googleapis.com/css?family=Open+Sans' 
              rel='stylesheet' type='text/css' />
        </links>
        
    </head>

    <body>
        <!--Pagina-->
        <div id="wrapper">
    
            <!--Barra superior-->
            <nav class="navbar navbar-default top-navbar" role="navigation">
            
            <!--Responsive-->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">FNS</a>
            </div>
            
            <!--Menu superior-->
            <ul class="nav navbar-top-links navbar-right">
                <!--Tarefas em execução-->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Alexandre Borges</strong>
                                    <span class="pull-right text-muted">
                                        <em>hoje</em>
                                    </span>
                                </div>
                                <div>Construir módulo de segurança e dar acesso à documentação do sistema</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Alexandre Borges</strong>
                                    <span class="pull-right text-muted">
                                        <em>até 03-11-2017</em>
                                    </span>
                                </div>
                                <div>Documentar o processo financeiro de importação</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>Lucas Simon</strong>
                                    <span class="pull-right text-muted">
                                        <em>Até 03-11-2017</em>
                                    </span>
                                </div>
                                <div>Dar andamento à negociação com a Sênior</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Lista completa de tarefas</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>

                </li>
                <!--Dados de login-->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><i class="fa fa-barcode fa-fw"></i>Bom dia, <?php echo($_SESSION['user_name']);?>!</li>
                        <li><a href="#"><i class="fa fa-user fa-fw"></i>Perfil</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="../../index.php?logout"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
            </ul><!--Menu superior-->
            
        </nav><!--superior-->
            
            <!--Menu esquerdo-->
            <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <!--Home-->
                    <li>
                        <a class="active-menu" href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <!--Cronograma-->
                    <li>
                        <a href="cronograma.php"><i class="fa fa-desktop"></i>Cronograma</a>
                    </li>
                    <!--Status Report-->
                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Status Report<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Novembro</a>
                            </li>
                            <li>
                                <a href="#">Outubro<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li><a href="status_report/sr27102017.php">27-10-2017</a></li>
                                    <li><a href="status_report/sr20102017.php">20-10-2017</a></li>
                                    <li><a href="status_report/sr16102017.php">16-10-2017</a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!--Atas-->
                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i>Atas de Reunião<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <!--Novembro-->
                            <li>
                                <a href="#">Novembro<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="atas/ata06112017_1.php">
                                            Ata 06-11-2017 - Tabela de Preços por Cliente
                                        </a>
                                    </li>
                                    <li>
                                        <a href="atas/ata06112017.php">
                                            Ata 06-11-2017 - Utilização de Código de barras
                                        </a>
                                    </li>
                                </ul>    
                            </li>
                            <!--Outubro-->
                            <li>
                                <a href="#">Outubro<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="atas/ata31102017.php">
                                            Ata 31-10-2017 - Tratativas Sênior
                                        </a>
                                    </li>
                                    <li>
                                        <a href="atas/ata17102017.php">
                                            Ata 17-10-2017 - Reunião Go NoGo
                                        </a>
                                    </li>
                                    <li>
                                        <a href="atas/ata16102017.php">
                                            Ata 16-10-2017 - Reunião Go NoGo
                                        </a>
                                    </li>
                                    <li>
                                        <a href="atas/ata02102017.php">
                                            Ata 02-10-2017 - Realinhamento Técnico do Projeto
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <!--Setembro-->
                            <li>
                                <a href="#">Setembro<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="atas/ata29092017.php">
                                            Ata 29-09-2017 - Planejamento de Pendências da FNS 
                                        </a>
                                    </li>
                                    <li>
                                        <a href="atas/ata28092017.php">
                                            Ata 28-09-2017 - Realinhamento do Projeto 
                                        </a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    <!--Documentação-->
                    <li>
                        <a href="documentacao/index.php"><i class="fa fa-desktop"></i>Documentação</a>
                    </li>
                </ul>
            </div>
        </nav><!--Menu esquerdo-->

            <!--Miolo da pagina-->
            <div id="page-wrapper">
                <div id="page-inner">
                    <!--Cabeçalho-->
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="page-header">
                                Dashboard <small>Projeto Novo ERP</small>
                            </h1>
                        </div>
                    </div><!--Cabeçalho-->
                    <!--Painel-->
                    <div class="row">
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <div class="panel panel-primary text-center no-boder bg-color-brown">
                                <div class="panel-body">
                                    <i class="fa fa-clock-o fa-5x"></i>
                                    <h3>Em Planejamento</h3>
                                </div>
                                <div class="panel-footer back-footer-brown">Tempo</div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <div class="panel panel-primary text-center no-boder bg-color-red">
                                <div class="panel-body">
                                    <i class="fa fa-dollar fa-5x"></i>
                                    <h3>Não planejado</h3>
                                </div>
                                <div class="panel-footer back-footer-red">Custo</div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <div class="panel panel-primary text-center no-boder bg-color-green">
                                <div class="panel-body">
                                    <i class="fa fa fa-table fa-5x"></i>
                                    <h3>80%</h3>
                                </div>
                                <div class="panel-footer back-footer-green">Escopo</div>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-12 col-xs-12">
                            <div class="panel panel-primary text-center no-boder bg-color-brown">
                                <div class="panel-body">
                                    <i class="fa fa-dot-circle-o fa-5x"></i>
                                    <h3>3</h3>
                                </div>
                                <div class="panel-footer back-footer-brown">Riscos</div>
                            </div>
                        </div>
                    </div><!--Painel-->
                    <!--Tarefas-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Gestão de Tarefas
                                </div>
                                <div class="panel-body">
<div class="table-responsive">
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th>Tarefas</th>
            </tr>
        </thead>
        <tbody>
            <!--Tarefa Principal-->
            <tr class="success odd gradeA">
                <td><strong>Contratação de Parceiros</strong></td>
            </tr>
            <!--Sub Tarefa Principal-->
            <tr class="danger odd gradeA">
                <td>&emsp;&emsp;<strong>Negociação Synergie</strong></td>
            </tr>
            <!--Tarefas-->                    
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Envio de email a advogada.
                    <div class="text-right">
                        <strong>Lucas</strong>, até 13-11-2017
                    </div>
                </td>
            </tr>
            <tr class="danger even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Apresentação de proposta.
                    Apresentação de novo canal.
                    Intermediação negociação com Synergie.<br/>
                    &emsp;&emsp;&emsp;&emsp;
                    Solicitou prorrogação até 08-11-2017
                    <div class="text-right">
                        <strong>Marcelo (Sênior)</strong>, até 06-11-2017
                    </div>
                </td>
            </tr>
            <!--Sub Tarefa Principal-->
            <tr class="success odd gradeA">
                <td>
                    &emsp;&emsp;
                    <strong>Negociação Outros Parceiros</strong>
                </td>
            </tr>
            <!--Tarefas-->                    
            <tr class="even gradeA">
                <td colspan="2">
                    &emsp;&emsp;&emsp;&emsp;
                    Apresentação da lista de fornecedores - apresentar os principais players de fornecimento de ERP.
                    <div class="text-right">
                        <strong>Alexandre</strong>, até 07-11-2017
                    </div>
                </td>
            </tr>
            <tr class="even gradeA">
                <td colspan="2">
                    &emsp;&emsp;&emsp;&emsp;
                    Criação de RFP - preparação da documentação para apresentação aos fornecedores. <br/> 
                    &emsp;&emsp;&emsp;&emsp;
                    <i class="color:red;">Documentos criados aguardando visita à Santa Catarina para confirmação de que todo  trabalho está contemplado.</i>
                    <div class="text-right">
                        <strong>Alexandre</strong>, até 13-11-2017
                    </div>
                </td>
            </tr>
            <tr class="even gradeA">
                <td colspan="2">
                    &emsp;&emsp;&emsp;&emsp;
                    Aprovação de Fornecedores - aprovação da lista de fornecedores para andamento do    processo de contratação.
                    <div class="text-right">
                        <strong>Marcelo/Lucas</strong>, até 13-11-2017
                    </div>
                </td>
            </tr>
            
            <!--Tarefa Principal--><!--Mapeamento processos da empresa-->
            <tr class="success odd gradeA">
                <td><strong>Mapeamento dos processos core da empresa</strong></td>
            </tr>
            <!--Sub Tarefa-->
            <tr class="odd gradeA">
                <td>&emsp;&emsp;<strong>Controle Estoque</strong></td>
            </tr>
            <!--Tarefas-->                    
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Levantamento dos processos As-Is.
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Desenho processo As-Is
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Desenho processo To-Be
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Correções e validações
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Criação do requisitos de sistema
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Criação das especificações
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
            <!--Sub Tarefa-->
            <tr class="odd gradeA">
                <td>&emsp;&emsp;<strong>Transporte - Interfiliais</strong></td>
            </tr>
            <!--Tarefas-->                    
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Levantamento dos processos As-Is.
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Desenho processo As-Is
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Desenho processo To-Be
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Correções e validações
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Criação do requisitos de sistema
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Criação das especificações
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
            <!--Sub Tarefa-->
            <tr class="odd gradeA">
                <td>&emsp;&emsp;<strong>Distribuição no Sul</strong></td>
            </tr>
            <!--Tarefas-->                    
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Levantamento dos processos As-Is.
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Desenho processo As-Is
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Desenho processo To-Be
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Correções e validações
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Criação do requisitos de sistema
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Criação das especificações
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
            <!--Sub Tarefa-->
            <tr class="odd gradeA">
                <td>&emsp;&emsp;<strong>Distribuição Brasil</strong></td>
            </tr>
            <!--Tarefas-->                    
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Levantamento dos processos As-Is.
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Desenho processo As-Is
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Desenho processo To-Be
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Correções e validações
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Criação do requisitos de sistema
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Criação das especificações
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
            <!--Sub Tarefa-->
            <tr class="odd gradeA">
                <td>&emsp;&emsp;<strong>Impressão Gráfica</strong></td>
            </tr>
            <!--Tarefas-->                    
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Levantamento dos processos As-Is.
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Desenho processo As-Is
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Desenho processo To-Be
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Correções e validações
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Criação do requisitos de sistema
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Criação das especificações
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
            <!--Sub Tarefa-->
            <tr class="odd gradeA">
                <td>&emsp;&emsp;<strong>Importação</strong></td>
            </tr>
            <!--Tarefas-->                    
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Levantamento dos processos As-Is.
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Desenho processo As-Is
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Desenho processo To-Be
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Correções e validações
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Criação do requisitos de sistema
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Criação das especificações
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>

            <!--Sub Tarefa-->
            <tr class="odd gradeA">
                <td>&emsp;&emsp;<strong>Comercial - Pedidos</strong></td>
            </tr>
            <!--Tarefas-->                    
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Levantamento dos processos As-Is.
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Desenho processo As-Is
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Desenho processo To-Be
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Correções e validações
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Criação do requisitos de sistema
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Criação das especificações
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>

            <!--Sub Tarefa-->
            <tr class="odd gradeA">
                <td>&emsp;&emsp;<strong>Comercial - Pedidos</strong></td>
            </tr>
            <!--Tarefas-->                    
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Levantamento dos processos As-Is.
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Desenho processo As-Is
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Desenho processo To-Be
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Correções e validações
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Criação do requisitos de sistema
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
            <tr class="even gradeA">
                <td>
                    &emsp;&emsp;&emsp;&emsp;
                    Criação das especificações
                    <div class="text-right">
                        <strong>Alexandre</strong>,<i>de 24-10-2017 a 15-01-2018</i>
                    </div>
                </td>
            </tr>
        </tbody> 
    </table>
                                    </div> 
                                    <div class="text-right">
                                        <a href="#">Tarefas Passadas <i class="fa fa-arrow-circle-right"></i></a>
                                    </div>
                                </div>    
                            </div> 
                        </div>
                    </div><!--Tarefas-->
                    <!--Riscos-->
                    <div class="row">
                        <div class="col-md-12">
                            <div class="panel panel-default">
                                <div class="panel-heading">
                                    Gestão de Riscos
                                </div>
                                <div class="panel-body">
                                    <div class="table-responsive">
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <thead>
                                    <tr>
                                        <th>Risco</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <!--Risco I-->
                                    <tr class="success odd gradeA">
                                        <td><strong>Ter uma única pessoa fazendo o processo de gestão e ficando responsável pela documentação dos processos da empresa.</strong></td>
                                    </tr>
                                    <tr class="even gradeA">
                                        <td>
                                            &emsp;&emsp;Lucas decidiu que cada setor terá um responsável pela documentação dos processos e que o Alexandre ficará responsável por apoiar os setores e por colocar o processo no formato adequado.
                                        </td>
                                    </tr>
                                    <!--Risco II-->
                                    <tr class="warning odd gradeA">
                                        <td><strong>Indefinição do processo com a Synergie.</strong></td>
                                    </tr>
                                    <tr class="even gradeA">
                                        <td>
                                            &emsp;&emsp; O Processo ainda esta em andamento e indefinido. No momento aguardamos uma proposta da Sênior e o Lucas está com email para ser enviado à advogada.
                                        </td>
                                    </tr>
                                    <!--Risco III-->
                                    <tr class="danger odd gradeA">
                                        <td><strong>Mapeamento dos processos da cia.</strong></td>
                                    </tr>
                                    <tr class="even gradeA">
                                        <td>
                                            &emsp;&emsp; É necessário agilizarmos a documentação dos processos da empresa. A previsão é que façamos isso a quatro mãos na semana de 06 a 09-11. e que depois os detalhes sejam incorporados conforme acordado nesta semana
                                        </td>
                                    </tr>
                                </tbody>    
                            </table>
                        </div> 
                                </div>    
                            </div> 
                        </div>
                    </div><!--Riscos-->
                </div>
            </div><!--miolo-->
        </div><!--Pagina-->
        <scripts>
            <!-- jQuery Js -->
            <script src="assets/js/jquery-1.10.2.js"></script>
            <!-- Bootstrap Js -->
            <script src="assets/js/bootstrap.min.js"></script>
            <!-- Metis Menu Js -->
            <script src="assets/js/jquery.metisMenu.js"></script>
            <!-- Custom Js -->
            <script src="assets/js/custom-scripts.js"></script>
        </scripts>
    </body>
</html>