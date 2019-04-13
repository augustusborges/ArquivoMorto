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
                                Ata 17-10-2017 <small>Reunião de Go x NoGo do Projeto</small>
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
                                                <td>Joaquim Castro</td>
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
                                        <strong>Alexandre</strong> apresentou a realidade financeira do projeto conforme documento de status report STATUS REPORT - 16-10-2017.pptx.
                                        </div>
								        <div class="alert alert-info">
                                        <strong>Lucas</strong> reportou o baixo nível de confiança no projeto dada a forma como a documentação é apresentada e o projeto é conduzido.
								        </div>
                                        <div class="alert alert-info">
                                        <strong>Joaquim</strong> reportou que o foco deve estar no processo no que todos concordaram.
								        </div>
                                        <div class="alert alert-info">
                                        <strong>Alexandre</strong> expos a impossibilidade de condução do projeto nos moldes atuais dado o alto gasto em recursos errados.
                                        </div>
                                        <div class="alert alert-danger">
                                        <strong></strong> Todos concordaram que há falhas de projeto de ambos os lados.
								        </div>
                                        <div class="alert alert-info">
                                        <strong>Alexandre</strong> sugeriu o rateio dos gastos financeiros pelos parceiros.
                                        </div>
                                        <div class="alert alert-info">
                                        <strong>Lucas</strong> propôs o rateio da parte de horas ainda não cobradas por não cumprirem o acordado com o financeiro e pela dificuldade na apresentação das justificativas de cobrança.
                                        </div>
                                        <div class="alert alert-info">
                                        <strong>Alexandre</strong> apresentou a proposta do Marcio de migração de hospedagem.
                                        </div>
                                        <div class="alert alert-info">
                                        <strong>Joaquim</strong> propôs a suspensão por três meses da cobrança de licenças e hospedagem (novembro, dezembro e janeiro).
                                        </div>
                                        <div class="alert alert-danger">
                                        <strong></strong> Após os três meses entram as 4 licenças propostas pelo Márcio.
                                        </div>
                                        <div class="alert alert-info">
                                        <strong>Joaquim</strong> expôs que a recontratação de licenças virá com outro valor no que Alexandre não concordou.
                                        </div>
                                        <div class="alert alert-info">
                                        <strong>Joaquim</strong> propôs o replanejamento do projeto a quatro mãos.
                                        </div>
                                        <div class="alert alert-info">
                                        <strong>Joaquim</strong> ressaltou a importância de trabalhar por camadas ao invés de processos, formato utilizado pela metodologia da Synergie/Sênior.
                                        </div>
                                        <div class="alert alert-info">
                                        <strong>Joaquim</strong> propôs que o projeto fique fixado em 480 horas e que se essas horas forem excedidas não serão cobradas pela Synergie, no que todos concordaram.
                                        </div>
                                        <div class="alert alert-info">
                                        <strong>Joaquim</strong> propôs que caso não sejam gastas as 480 horas os valores cobrados serão proposcionais às horas trabalhadas, no que todos concordaram.
                                        </div>
                                        <div class="alert alert-info">
                                        <strong>Joaquim</strong> sugeriu que o que for solicitado pela FNS que estiver fora do escopo que abrange as 480 horas deverá ser conversado previamente e que só será executado com a aprovação do Alexandre e do Lucas, no que todos concordaram.
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
                                                <td>Realinhamento com equipe interna</td>
                                                <td>Joaquim</td>
                                                <td></td>
                                            </tr>
                                            <tr>
                                                <td>Retomada do projeto</td>
                                                <td>Alexandre</td>
                                                <td>Após aceite da ata</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        </div>
                    </div><!--Proximos passos-->
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