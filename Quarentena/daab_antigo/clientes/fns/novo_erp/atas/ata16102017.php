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
                                Ata 16-10-2017 <small>Go x NoGo do Projeto</small>
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
                                                <td>Marcio Melo</td>
                                                <td>Synergie</td>
                                                <td>Presente</td>
                                            </tr>
                                            <tr>
                                                <td>Marli Queiroz (por telefone)</td>
                                                <td>Synergie</td>
                                                <td>Presente</td>
                                            </tr>                                        
                                            <tr>
                                                <td>Alexandre Borges</td>
                                                <td>FNS</td>
                                                <td>Presente</td>
                                            </tr>
                                            <tr>
                                                <td>Joaquim Castro</td>
                                                <td>Synergie</td>
                                                <td>Ausente</td>
                                            </tr>
                                            <tr>
                                                <td>Marcelo Simon</td>
                                                <td>FNS</td>
                                                <td>Ausente</td>
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
									<strong>Alexandre</strong> apresentou o baixo nível de trabalho realizado até o momento dados os documentos entregues pelo projeto.
								    </div>
                                    <div class="alert alert-info">
									<strong>Alexandre</strong> enfatizou a falta de documentação do projeto por ambas as partes.
								    </div>
                                    <div class="alert alert-info">
									<strong>Marcio</strong> apresentou a dificuldade de ter seus agendamentos atendidos pela FNS.
								    </div>
                                    <div class="alert alert-info">
									<strong>Marcelo</strong> solicitou a documentação completa do projeto. Marly ficou de passar por email.
								    </div>
                                    <div class="alert alert-info">
									<strong>Lucas</strong> apresentou a incoerencia na condução do projeto mostrando que foi gasto um tempo enorme de projeto em cadastros manuais ao seguir a sugestão do Junior (antigo GP Synergie), por exemplo.
								    </div>
                                    <div class="alert alert-info">
									<strong>Lucas</strong> apresentou o e-mail trocado diretamente com a responsável do financeiro Synergie, Vanessa, evidenciando que a forma cobrança das RATS não está sendo respeitada pela Synergie.
								    </div>
                                    <div class="alert alert-danger">
									<strong>Marcio</strong> apresentou que não consegue alterar número de licenças a menos de 4.
								    </div>
                                    <div class="alert alert-info">
									<strong>Alexandre</strong> explicou que se não houver uma redução drástica de valores e uma adequação da proposta ao consumo on demand torna-se inviável financeiramente continuar com o projeto.
								    </div>
                                    <div class="alert alert-info">
									<strong>Marcio</strong> sugeriu a absorção da hospedagem pela FNS, o que será levantado na sequência.
								    </div>
                                    <div class="alert alert-info">
									<strong>Alexandre</strong> levantou a co-resposabilidade nos gastos inadequados(segundo estudos) do projeto até o momento.
								    </div>
                                    <div class="alert alert-info">
									<strong>Alexandre</strong> solicitou a divisão do prejuizo pelas duas empresas.
								    </div>
                                    <div class="alert alert-info">
									<strong>Lucas</strong> sugeriu apenas as horas não pagas sejam reincorporadas ao projeto.
								    </div>
                                    <div class="alert alert-info">
									<strong>Marcio</strong> questionou o que é necessário para se implantar o projeto ainda este ano.
								    </div>
                                    <div class="alert alert-info">
									<strong>Alexandre</strong> apresentou a inviabilidade dada a necessidade de reprogramação do mesmo e adequação.
								    </div>
                                    <div class="alert alert-info">
									<strong>Alexandre</strong> apresentou algumas falhas de planejamento e cronograma que implicam em um trabalho não pensado pela equipe até então.
								    </div>
                                    <div class="alert alert-info">
									<strong>Joaquim</strong>, por intermédio do Márcio se prontificou a realizar uma reunião final amanhã 17-out-2017 pela manhã para definirmos o rumo do projeto.
								    </div>
                                    <div class="alert alert-danger">
									<strong></strong> Até o final da reunião a documentação não foi entregue.
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
                                                <td>Nova reunião para definição do go nogo </td>
                                                <td>Joaquim</td>
                                                <td>17-10-2017</td>
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