<?php

?>
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
                <a class="navbar-brand" href="../index.php">FNS</a>
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
            
            </nav><!--Barra superior-->
        