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
                                Ata 31-10-2017 <small>Tratativas com a Sênior</small>
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
                                                <td>Marcelo Piellusch</td>
                                                <td>Sênior</td>
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
									<strong>Alexandre</strong> Apresentou os problemas técnicos mapeado com a Synergie.
                                </div>
								    <div class="alert alert-info">
									<strong>Lucas</strong> Apresentou os problemas financeiros e de relacionamento mapeados com a Synergie.
								</div>
                                    <div class="alert alert-danger">
									<strong>Marcelo</strong> Expôs que a Synergie é uma entidade jurídica independente e que a Sênior não possui poder de barganha financeira com a mesma.
								</div>
                                    <div class="alert alert-danger">
									<strong>Marcelo</strong> Expôs que não pode haver troca de canal enquanto constar pendências financeiras com outro canal.
								</div>
                                    <div class="alert alert-danger">
									<strong>Marcelo</strong> Explicou que nenhum canal dele atualmente é 100% ERP, sendo a maior mais experiente em RH do que em ERP.
								</div>
                                    <div class="alert alert-danger">
									<strong>Marcelo</strong> Expôs que os canais são independentes financeiramente e que qualquer barganha precisa do aval do canal contratado ou a contratar.
								</div>
                                    <div class="alert alert-danger">
									<strong>Lucas</strong> Irá enviar email à Synergie para tentar fechar a tratativa do projeto.
								</div>
                                    <div class="alert alert-danger">
									<strong>Marcelo</strong> Irá interceder junto a Synergie para tentativa de encerramento amigável.
								</div>
                                    <div class="alert alert-success">
									<strong>Marcelo</strong> Irá negociar com a Sênior e o canal forma de congelamento e carência nas licenças do produto.
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
                                                <td>Tratativa de novo canal</td>
                                                <td>Marcelo</td>
                                                <td>06-11-2017</td>
                                            </tr>
                                            <tr>
                                                <td>Envio de Email à Synergie</td>
                                                <td>Lucas</td>
                                                <td>06-11-2017</td>
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