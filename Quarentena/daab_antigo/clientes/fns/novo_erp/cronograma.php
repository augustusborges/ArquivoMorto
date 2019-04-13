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
        <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
    </links>

    </head>

    <body>
    
        <!--Pagina-->
        <div id="wrapper">

            <!--Barra superior-->
            <nav class="navbar navbar-default top-navbar" role="navigation">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">FNS</a>
            </div>

            <ul class="nav navbar-top-links navbar-right">
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-envelope fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-messages">
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Doe</strong>
                                    <span class="pull-right text-muted">
                                        <em>Today</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since the 1500s...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since an kwilnw...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div>Lorem Ipsum has been the industry's standard dummy text ever since the...</div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-tasks fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-tasks">
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 1</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (success)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 2</strong>
                                        <span class="pull-right text-muted">28% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="28" aria-valuemin="0" aria-valuemax="100" style="width: 28%">
                                            <span class="sr-only">28% Complete</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 3</strong>
                                        <span class="pull-right text-muted">60% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
                                            <span class="sr-only">60% Complete (warning)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <p>
                                        <strong>Task 4</strong>
                                        <span class="pull-right text-muted">85% Complete</span>
                                    </p>
                                    <div class="progress progress-striped active">
                                        <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100" style="width: 85%">
                                            <span class="sr-only">85% Complete (danger)</span>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Tasks</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-tasks -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-bell fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-alerts">
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-comment fa-fw"></i> New Comment
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-twitter fa-fw"></i> 3 New Followers
                                    <span class="pull-right text-muted small">12 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-envelope fa-fw"></i> Message Sent
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-tasks fa-fw"></i> New Task
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#">
                                <div>
                                    <i class="fa fa-upload fa-fw"></i> Server Rebooted
                                    <span class="pull-right text-muted small">4 min</span>
                                </div>
                            </a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a class="text-center" href="#">
                                <strong>See All Alerts</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-alerts -->
                </li>
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#" aria-expanded="false">
                        <i class="fa fa-user fa-fw"></i> <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>
                        <li><a href="#"><i class="fa fa-gear fa-fw"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li><a href="#"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
        </nav><!--superior-->
            
            <!--Menu lateral-->
            <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

                    <li>
                        <a class="active-menu" href="index.php"><i class="fa fa-dashboard"></i> Dashboard</a>
                    </li>
                    <li>
                        <a href="cronograma.php"><i class="fa fa-desktop"></i>Cronograma</a>
                    </li>
                    <li>
                        <a href="ui-elements.html"><i class="fa fa-desktop"></i> UI Elements</a>
                    </li>
					<li>
                        <a href="chart.html"><i class="fa fa-bar-chart-o"></i> Charts</a>
                    </li>
                    <li>
                        <a href="tab-panel.html"><i class="fa fa-qrcode"></i> Tabs & Panels</a>
                    </li>
                    
                    <li>
                        <a href="table.html"><i class="fa fa-table"></i> Responsive Tables</a>
                    </li>
                    <li>
                        <a href="form.html"><i class="fa fa-edit"></i> Forms </a>
                    </li>


                    <li>
                        <a href="#"><i class="fa fa-sitemap"></i> Multi-Level Dropdown<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link</a>
                            </li>
                            <li>
                                <a href="#">Second Level Link<span class="fa arrow"></span></a>
                                <ul class="nav nav-third-level">
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>
                                    <li>
                                        <a href="#">Third Level Link</a>
                                    </li>

                                </ul>

                            </li>
                        </ul>
                    </li>
                    <li>
                        <a href="empty.html"><i class="fa fa-fw fa-file"></i> Empty Page</a>
                    </li>
                </ul>

            </div>

        </nav><!--lateral-->
            
            <!--Meio Pagina-->
            <div id="page-wrapper">
                
                <div id="page-inner">

                    <!--Cabeçalho-->
                    <div class="row">
                        <div class="col-md-12">
                            <h1 class="page-header">
                                Cronograma <small>Projeto Novo ERP</small>
                            </h1>
                        </div>
                    </div><!--Cabeçalho-->

                    <!--Cronograma-->
                    <div class="row">
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                Cronograma
                            </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Id</th>
                                            <th>Tarefa</th>
                                            <th>Duração</th>
                                            <th>Início</th>
                                            <th>Término</th>
                                            <th>Andamento</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="info odd gradeA">
                                            <td><strong>1</strong></td>
                                            <td><strong>Projeto Novo ERP</strong></td>
                                            <td>286 dias</td>
                                            <td class="center">24-10-2017</td>
                                            <td class="center">16-11-2018</td>
                                            <td class="center">
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="5" aria-valuemin="0" aria-valuemax="100" style="width: 5%">
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="success even gradeA">
                                            <td>&emsp;&emsp;1.1</td>
                                            <td>&emsp;&emsp;Criação de RFP</td>
                                            <td>20 dias</td>
                                            <td class="center">24-10-2017</td>
                                            <td class="center">13-11-2017</td>
                                            <td class="center">
                                                 <div class="progress progress-striped">
                                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%">
                                                    </div>
                                                </div>
                                            </td>                                            
                                        </tr>
                                        <tr class="success odd gradeA">
                                            <td>&emsp;&emsp;<strong>1.2</strong></td>
                                            <td>&emsp;&emsp;<strong>Contratação de Parceiros</strong></td>
                                            <td>45 dias</td>
                                            <td class="center">02-11-2017</td>
                                            <td class="center">03-01-2018</td>
                                            <td class="center">
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="14" aria-valuemin="0" aria-valuemax="100" style="width: 14%">
                                                    </div>
                                                </div>
                                            </td>                                            
                                        </tr>
                                        <tr class="info even gradeA">
                                            <td>&emsp;&emsp;&emsp;1.2.1</td>
                                            <td>&emsp;&emsp;&emsp;Negociação Sênior</td>
                                            <td>20 dias</td>
                                            <td class="center">02-11-2017</td>
                                            <td class="center">29-11-2017</td>
                                            <td class="center">
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
                                                    </div>
                                                </div>
                                            </td>                                            
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>&emsp;&emsp;&emsp;<strong>1.2.2</strong></td>
                                            <td>&emsp;&emsp;&emsp;<strong>Negociação Outros Parceiros</strong></td>
                                            <td>37 dias</td>
                                            <td class="center">13-11-2017</td>
                                            <td class="center">02-01-2018</td>
                                            <td class="center">
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;1.2.2.1</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;Envio de RFP</td>
                                            <td>7 dias</td>
                                            <td class="center">13-11-2017</td>
                                            <td class="center">20-11-2017</td>
                                            <td class="center">
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;1.2.2.2</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;Apresentação de Fornecedor</td>
                                            <td>30 dias</td>
                                            <td class="center">13-11-2017</td>
                                            <td class="center">22-12-2017</td>
                                            <td class="center">
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;1.2.2.3</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;Estudos Técnicos</td>
                                            <td>30 dias</td>
                                            <td class="center">13-11-2017</td>
                                            <td class="center">22-12-2017</td>
                                            <td class="center">
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;1.2.2.4</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;Estudo Financeiro e de Negócio</td>
                                            <td>30 dias</td>
                                            <td class="center">13-11-2017</td>
                                            <td class="center">22-12-2017</td>
                                            <td class="center">
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>&emsp;&emsp;&emsp;1.2.3</td>
                                            <td>&emsp;&emsp;&emsp;Escolha de Fornecedor</td>
                                            <td>1 dias</td>
                                            <td class="center">25-12-2017</td>
                                            <td class="center">25-12-2017</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="info odd gradeA">
                                            <td>&emsp;&emsp;<strong>1.3</strong></td>
                                            <td>&emsp;&emsp;<strong>Mapeamento processos core da empresa</strong></td>
                                            <td>60 dias</td>
                                            <td class="center">24-10-2017</td>
                                            <td class="center">15-01-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                                        <span class="sr-only">10%</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>&emsp;&emsp;&emsp;1.3.1</td>
                                            <td>&emsp;&emsp;&emsp;Controle de Estoque</td>
                                            <td>60 dias</td>
                                            <td class="center">24-10-2017</td>
                                            <td class="center">15-01-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">10%</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>&emsp;&emsp;&emsp;<strong>1.3.2</strong></td>
                                            <td>&emsp;&emsp;&emsp;<strong>Transporte</strong></td>
                                            <td>60 dias</td>
                                            <td class="center">24-10-2017</td>
                                            <td class="center">15-01-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">00%</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;1.3.2.1</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;Interfiliais</td>
                                            <td>60 dias</td>
                                            <td class="center">24-10-2017</td>
                                            <td class="center">15-01-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">10%</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;1.3.2.2</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;Distribuição no Sul</td>
                                            <td>60 dias</td>
                                            <td class="center">24-10-2017</td>
                                            <td class="center">15-01-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">10%</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>&emsp;&emsp;&emsp;1.3.3</td>
                                            <td>&emsp;&emsp;&emsp;Impressão Gráfica</td>
                                            <td>60 dias</td>
                                            <td class="center">24-10-2017</td>
                                            <td class="center">15-01-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">10%</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="info odd gradeA">
                                            <td>&emsp;&emsp;&emsp;1.3.4</td>
                                            <td>&emsp;&emsp;&emsp;Importação</td>
                                            <td>60 dias</td>
                                            <td class="center">24-10-2017</td>
                                            <td class="center">15-01-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="10" aria-valuemin="0" aria-valuemax="100" style="width: 10%">
                                                        <span class="sr-only">10%</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>&emsp;&emsp;&emsp;1.3.5</td>
                                            <td>&emsp;&emsp;&emsp;Pedidos</td>
                                            <td>60 dias</td>
                                            <td class="center">24-10-2017</td>
                                            <td class="center">15-01-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">10%</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>&emsp;&emsp;&emsp;1.3.6</td>
                                            <td>&emsp;&emsp;&emsp;Financeiro</td>
                                            <td>60 dias</td>
                                            <td class="center">24-10-2017</td>
                                            <td class="center">15-01-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0%</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        
                                        <tr class="even gradeA">
                                            <td>&emsp;&emsp;<strong>1.4</strong></td>
                                            <td>&emsp;&emsp;<strong>Implantação do produto</strong></td>
                                            <td>235 dias</td>
                                            <td class="center">26-12-2017</td>
                                            <td class="center">23-11-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>&emsp;&emsp;&emsp;1.4.1</td>
                                            <td>&emsp;&emsp;&emsp;Contratação de hospedagem</td>
                                            <td>7 dias</td>
                                            <td class="center">26-12-2017</td>
                                            <td class="center">02-01-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>&emsp;&emsp;&emsp;1.4.2</td>
                                            <td>&emsp;&emsp;&emsp;Instalação do sistema</td>
                                            <td>7 dias</td>
                                            <td class="center">03-01-2018</td>
                                            <td class="center">11-01-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>&emsp;&emsp;&emsp;<strong>1.4.3</strong></td>
                                            <td>&emsp;&emsp;&emsp;<strong>Importação dos cadastros</strong></td>
                                            <td>23 dias</td>
                                            <td class="center">12-01-2018</td>
                                            <td class="center">13-02-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;1.4.3.1</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;Criação de rotinas automatizadas</td>
                                            <td>7 dias</td>
                                            <td class="center">12-01-2018</td>
                                            <td class="center">22-01-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;<strong>1.4.3.2</strong></td>
                                            <td>&emsp;&emsp;&emsp;&emsp;<strong>importação dos dados cadastrais</strong></td>
                                            <td>23 dias</td>
                                            <td class="center">12-01-2018</td>
                                            <td class="center">13-02-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;1.4.3.2.1</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;Gerais</td>
                                            <td>10 dias</td>
                                            <td class="center">12-01-2018</td>
                                            <td class="center">25-01-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;1.4.3.2.2</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;Fiscais</td>
                                            <td>5 dias</td>
                                            <td class="center">12-01-2018</td>
                                            <td class="center">18-01-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;1.4.3.2.3</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;Clientes</td>
                                            <td>2 dias</td>
                                            <td class="center">19-01-2018</td>
                                            <td class="center">22-01-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;1.4.3.2.4</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;Produtos</td>
                                            <td>4 dias</td>
                                            <td class="center">23-01-2018</td>
                                            <td class="center">26-01-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;1.4.3.2.5</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;Fornecedores</td>
                                            <td>2 dias</td>
                                            <td class="center">26-01-2018</td>
                                            <td class="center">29-01-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;1.4.3.2.6</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;Transportadoras</td>
                                            <td>2 dias</td>
                                            <td class="center">29-01-2018</td>
                                            <td class="center">30-01-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;1.4.3.2.7</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;Funcionários</td>
                                            <td>2 dias</td>
                                            <td class="center">30-01-2018</td>
                                            <td class="center">31-01-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;1.4.3.2.8</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;Financeiros</td>
                                            <td>10 dias</td>
                                            <td class="center">31-01-2018</td>
                                            <td class="center">13-02-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>&emsp;&emsp;&emsp;<strong>1.4.4</strong></td>
                                            <td>&emsp;&emsp;&emsp;<strong>Configuração do sistema</strong></td>
                                            <td>68 dias</td>
                                            <td class="center">14-02-2018</td>
                                            <td class="center">18-05-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;<strong>1.4.4.1</strong></td>
                                            <td>&emsp;&emsp;&emsp;&emsp;<strong>Configuração dos processos</strong></td>
                                            <td>28 dias</td>
                                            <td class="center">14-02-2018</td>
                                            <td class="center">23-03-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;1.4.4.1.1</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;Pedido</td>
                                            <td>7 dias</td>
                                            <td class="center">14-02-2018</td>
                                            <td class="center">22-02-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;1.4.4.1.2</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;Financeiro</td>
                                            <td>7 dias</td>
                                            <td class="center">14-02-2018</td>
                                            <td class="center">22-02-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;1.4.4.1.3</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;Importação</td>
                                            <td>7 dias</td>
                                            <td class="center">23-02-2018</td>
                                            <td class="center">03-05-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;1.4.4.1.4</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;Compra</td>
                                            <td>7 dias</td>
                                            <td class="center">23-02-2018</td>
                                            <td class="center">03-05-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;1.4.4.1.5</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;Venda</td>
                                            <td>7 dias</td>
                                            <td class="center">06-03-2018</td>
                                            <td class="center">14-03-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;1.4.4.1.6</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;Estoque</td>
                                            <td>7 dias</td>
                                            <td class="center">06-03-2018</td>
                                            <td class="center">14-03-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;1.4.4.1.7</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;Trasporte</td>
                                            <td>7 dias</td>
                                            <td class="center">15-03-2018</td>
                                            <td class="center">23-03-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;1.4.4.1.8</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;Processo fabril</td>
                                            <td>7 dias</td>
                                            <td class="center">15-03-2018</td>
                                            <td class="center">23-03-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;<strong>1.4.4.2</strong></td>
                                            <td>&emsp;&emsp;&emsp;&emsp;<strong>Implantação dos workflows</strong></td>
                                            <td>40 dias</td>
                                            <td class="center">26-03-2018</td>
                                            <td class="center">18-05-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;1.4.4.2.1</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;Pedido</td>
                                            <td>10 dias</td>
                                            <td class="center">26-03-2018</td>
                                            <td class="center">06-04-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;1.4.4.2.2</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;Financeiro</td>
                                            <td>10 dias</td>
                                            <td class="center">26-03-2018</td>
                                            <td class="center">06-04-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;1.4.4.2.3</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;Importação</td>
                                            <td>10 dias</td>
                                            <td class="center">09-04-2018</td>
                                            <td class="center">20-04-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;1.4.4.2.4</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;Compra</td>
                                            <td>10 dias</td>
                                            <td class="center">09-04-2018</td>
                                            <td class="center">20-04-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;1.4.4.2.5</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;Venda</td>
                                            <td>10 dias</td>
                                            <td class="center">23-04-2018</td>
                                            <td class="center">04-05-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;1.4.4.2.6</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;Estoque</td>
                                            <td>10 dias</td>
                                            <td class="center">23-04-2018</td>
                                            <td class="center">04-05-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;1.4.4.2.7</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;Trasporte</td>
                                            <td>10 dias</td>
                                            <td class="center">07-05-2018</td>
                                            <td class="center">18-05-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;1.4.4.2.8</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;Processo fabril</td>
                                            <td>10 dias</td>
                                            <td class="center">07-05-2018</td>
                                            <td class="center">18-05-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;1.4.4.2.9</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;Estabilização de workflows</td>
                                            <td>20 dias</td>
                                            <td class="center">23-04-2018</td>
                                            <td class="center">18-05-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>&emsp;&emsp;&emsp;<strong>1.4.5</strong></td>
                                            <td>&emsp;&emsp;&emsp;<strong>Automação dos processos</strong></td>
                                            <td>40 dias</td>
                                            <td class="center">21-05-2018</td>
                                            <td class="center">13-07-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;1.4.5.1</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;pedido</td>
                                            <td>10 dias</td>
                                            <td class="center">21-05-2018</td>
                                            <td class="center">01-06-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;1.4.5.2</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;Financeiro</td>
                                            <td>10 dias</td>
                                            <td class="center">21-05-2018</td>
                                            <td class="center">01-06-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;1.4.5.3</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;Importação</td>
                                            <td>10 dias</td>
                                            <td class="center">04-06-2018</td>
                                            <td class="center">15-06-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;1.4.5.4</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;Compra</td>
                                            <td>10 dias</td>
                                            <td class="center">04-06-2018</td>
                                            <td class="center">15-06-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;1.4.5.5</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;Venda</td>
                                            <td>10 dias</td>
                                            <td class="center">18-06-2018</td>
                                            <td class="center">29-06-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;1.4.5.6</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;Estoque</td>
                                            <td>10 dias</td>
                                            <td class="center">18-06-2018</td>
                                            <td class="center">29-06-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;1.4.5.7</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;Trasporte</td>
                                            <td>10 dias</td>
                                            <td class="center">02-07-2018</td>
                                            <td class="center">13-07-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;1.4.5.8</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;Processo fabril</td>
                                            <td>10 dias</td>
                                            <td class="center">02-07-2018</td>
                                            <td class="center">13-07-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;1.4.5.9</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;Estabilização dos processos</td>
                                            <td>20 dias</td>
                                            <td class="center">18-06-2018</td>
                                            <td class="center">13-07-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>&emsp;&emsp;&emsp;<strong>1.4.6</strong></td>
                                            <td>&emsp;&emsp;&emsp;<strong>Integração com sistemas externos</strong></td>
                                            <td>40 dias</td>
                                            <td class="center">16-07-2018</td>
                                            <td class="center">07-09-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;<strong>1.4.6.1</strong></td>
                                            <td>&emsp;&emsp;&emsp;&emsp;<strong>Integrações bancárias</strong></td>
                                            <td>10 dias</td>
                                            <td class="center">16-07-2018</td>
                                            <td class="center">27-07-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;1.4.6.1.1</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;Emissão de boletos</td>
                                            <td>10 dias</td>
                                            <td class="center">16-07-2018</td>
                                            <td class="center">27-07-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;1.4.6.1.2</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;DDA</td>
                                            <td>10 dias</td>
                                            <td class="center">16-07-2018</td>
                                            <td class="center">27-07-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;1.4.6.1.3</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;CONCIB</td>
                                            <td>10 dias</td>
                                            <td class="center">16-07-2018</td>
                                            <td class="center">27-07-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;<strong>1.4.6.2</strong></td>
                                            <td>&emsp;&emsp;&emsp;&emsp;<strong>Integração com transportadoras</strong></td>
                                            <td>10 dias</td>
                                            <td class="center">30-07-2018</td>
                                            <td class="center">10-08-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;<strong>1.4.6.2.1</strong></td>
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;<strong>EDI</strong></td>
                                            <td>10 dias</td>
                                            <td class="center">30-07-2018</td>
                                            <td class="center">10-08-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;1.4.6.2.1.1</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;NOTFIS</td>
                                            <td>10 dias</td>
                                            <td class="center">30-07-2018</td>
                                            <td class="center">10-08-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;1.4.6.2.1.2</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;CONEMB</td>
                                            <td>10 dias</td>
                                            <td class="center">30-07-2018</td>
                                            <td class="center">10-08-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;1.4.6.2.1.3</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;OCORREN</td>
                                            <td>10 dias</td>
                                            <td class="center">30-07-2018</td>
                                            <td class="center">10-08-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;1.4.6.2.1.4</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;DOCCOB</td>
                                            <td>10 dias</td>
                                            <td class="center">30-07-2018</td>
                                            <td class="center">10-08-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;1.4.6.2.1.5</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;PREFAT</td>
                                            <td>10 dias</td>
                                            <td class="center">30-07-2018</td>
                                            <td class="center">10-08-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;<strong>1.4.6.3</strong></td>
                                            <td>&emsp;&emsp;&emsp;&emsp;<strong>Integração de importação</strong></td>
                                            <td>20 dias</td>
                                            <td class="center">13-08-2018</td>
                                            <td class="center">07-09-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;1.4.6.3.1</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;Fornecedores</td>
                                            <td>20 dias</td>
                                            <td class="center">13-08-2018</td>
                                            <td class="center">07-09-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;1.4.6.3.2</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;Agentes</td>
                                            <td>20 dias</td>
                                            <td class="center">13-08-2018</td>
                                            <td class="center">07-09-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;1.4.6.3.3</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;&emsp;Despachantes</td>
                                            <td>20 dias</td>
                                            <td class="center">13-08-2018</td>
                                            <td class="center">07-09-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>&emsp;&emsp;&emsp;<strong>1.4.7</strong></td>
                                            <td>&emsp;&emsp;&emsp;<strong>Tombamento</strong></td>
                                            <td>90 dias</td>
                                            <td class="center">04-06-2018</td>
                                            <td class="center">10-05-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;1.4.7.1</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;Estudo para tombamento</td>
                                            <td>40 dias</td>
                                            <td class="center">04-06-2018</td>
                                            <td class="center">27-07-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;1.4.7.2</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;Testes de tombamento</td>
                                            <td>40 dias</td>
                                            <td class="center">02-07-2018</td>
                                            <td class="center">24-08-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>&emsp;&emsp;&emsp;&emsp;1.4.7.3</td>
                                            <td>&emsp;&emsp;&emsp;&emsp;Tombamento de dados legados</td>
                                            <td>20 dias</td>
                                            <td class="center">10-09-2018</td>
                                            <td class="center">05-10-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="odd gradeA">
                                            <td>&emsp;&emsp;&emsp;1.4.8</td>
                                            <td>&emsp;&emsp;&emsp;Estabilização do sistema</td>
                                            <td>30 dias</td>
                                            <td class="center">08-10-2018</td>
                                            <td class="center">16-11-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr class="even gradeA">
                                            <td>&emsp;&emsp;1.5</td>
                                            <td>&emsp;&emsp;Conclusão do projeto</td>
                                            <td>10 dias</td>
                                            <td class="center">05-11-2018</td>
                                            <td class="center">16-11-2018</td>
                                            <td>
                                                 <div class="progress progress-striped active">
                                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                                        <span class="sr-only">0% Complete</span>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div><!--cronograma-->
 				
                </div><!-- END PAGE INNER  -->
            </div><!--Meio pagina-->
        </div><!--Pagina-->
        <scripts>
        <!-- JS Scripts-->
        <!-- jQuery Js -->
        <script src="assets/js/jquery-1.10.2.js"></script>
        <!-- Bootstrap Js -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Metis Menu Js -->
        <script src="assets/js/jquery.metisMenu.js"></script>
        <!-- Morris Chart Js -->
        <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
        <script src="assets/js/morris/morris.js"></script>
        <!-- Custom Js -->
        <script src="assets/js/custom-scripts.js"></script>
    </scripts>
    </body>
</html>