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
                                Ata 06-11-2017 <small>Tabela de Preço Por Cliente</small>
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
									<strong>Alexandre</strong> apresentou a proposta de se ter as três tabelas de preço dos produtos cadastradas no sistema.
                                    </div>
								    <div class="alert alert-info">
									<strong>Roberto</strong> informou que a tabela 3% é de distribuidores, a 4% é a padrão para entrantes e a 6% é a tabela para representantes com força de vendas.
								    </div>
                                    <div class="alert alert-info">
									<strong>Roberto</strong> explicou que as três tabelas são tabelas de circulação de vendas e são aplicadas a novos clientes.
								    </div>
                                    <div class="alert alert-info">
									<strong>Alexandre</strong> propôs que além das tabelas cadastradas o sistema tivesse também um campo percentual de preço atribuido ao cliente. Este campo receberia um percentual a ser atribuido ao cliente e se fosse informado prevaleceria sobre a tabela.
								    </div>
                                    <div class="alert alert-info">
									<strong>Marcelo</strong> expôs que a tabela padrão a ser aplicada, se não for mencionada outra, será a de 4%. Sobre ela deverá ser aplicado o percentual de negociação com o cliente.
								    </div>
                                    <div class="alert alert-info">
									<strong>Roberto</strong> expôs que a negociação é por produto/cliente, ou seja, um cliente pode ter valor percentual diferente de negociação para cada produto que ele compra.
                                    </div>
                                    <div class="alert alert-info">
									<strong>Alexandre</strong> ficou de apresentar novo planejamento com solução para este formato.
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
                                                <td>Solução Tabela de Preço Produto x Cliente</td>
                                                <td>Alexandre</td>
                                                <td>09-11-2017</td>
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