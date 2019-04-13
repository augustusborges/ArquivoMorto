<?php

    require_once("libraries/password_compatibility_library.php");
    require_once("config/db.php");
    require_once("classes/Login.php");

    $login = new Login();

    if ($login->isUserLoggedIn() == true) {
        if($_SESSION['user_empresa'] == 'fns')
            header('Location: fns/novo_erp/index.php');
        elseif($_SESSION['user_empresa'] == 'daab')
            header('Location: intranet/index.php');
        else
            header('Location: cadastro.php');
    }    
    else {
        include("views/not_logged_in.php");
    }
?>
<!DOCTYPE html>
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>daab - Inteligência Tecnológica Aplicada</title>

        <links>
            <link rel="stylesheet" href="css/bootstrap.min.css">
            <link rel="stylesheet" href="css/flexslider.css">
            <link rel="stylesheet" href="css/jquery.fancybox.css">
            <link rel="stylesheet" href="css/main.css">
            <link rel="stylesheet" href="css/mine.css">
            <link rel="stylesheet" href="css/responsive.css">
            <link rel="stylesheet" href="css/animate.min.css">
            <link rel="stylesheet" href="css/font-icon.css">
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

            
            <link rel="shortcut icon" href="favicon.ico" type="image/x-icon"/>
        </links>
    </head>

    <body>


        <!--Cabeçalho-->
        <section class="banner" role="banner"> 
            
            <!--Login-->
            <header id="header">
                
                <!--Formulario de login-->
                <div id="login" class="frmLogin">
                    <form method="post" action="index.php">
                        <label for="login_input_username">Login</label>
                        
                        <input id="login_input_username" class="login_input" type="text" name="user_name" placeholder="Email" required />

                        <input id="login_input_password" class="login_input" type="password" name="user_password" placeholder="Senha" autocomplete="off" required />

                        <input type="submit"  name="login" value="Ok" />
                    </form>
                </div>

                <!--Menu-->
                <div class="header-content clearfix"> 
                    <a class="logo" href="#"><img src="images/logo.png" alt=""></a>
                    <nav class="navigation" role="navigation">
                        <ul class="primary-nav">
                            <li><a href="#intro">Quem Somos</a></li>
                            <li><a href="#services">Serviços</a></li>
                            <li><a href="#works">Produtos</a></li>
                            <li><a href="views/faleconosco.php">Fale Conosco</a></li>
                            <!--<li><a href="#teams">Our Team</a></li>-->
                            <!--<li><a href="#testimonials">Testimonials</a></li>-->
                        </ul>
                    </nav>
                    <a href="#" class="nav-toggle">Menu<span></span></a> 
                </div>

            </header><!--Fim cabeçalho--> 
            
            <div class="container"><!-- banner text -->
                <div class="col-md-10 col-md-offset-1">
                    <div class="banner-text text-center">
                        <h1>d.a.a.b</h1>
                        <p>Inteligência Tecnológica Aplicada</p>
                        <nav role="navigation"> 
                            <!--<a href="#services" class="banner-btn"><img src="images/down-arrow.png" alt=""></a>-->
                        </nav>
                    </div><!-- banner text --> 
                </div>
            </div>
        </section><!-- header section --> 

        <section id="intro" class="section intro no-padding"><!-- about section -->

            <div class="container-fluid">
                <div class="row no-gutter">
                    <div class="flexslider">
                        <ul class="slides">
                            <li>
                                <div class="col-md-6">
                                    <div class="avatar"> <img src="images/intro-img1.jpg" alt="" class="img-responsive"> </div>
                                </div>
                                <div class="col-md-6">
                                    <blockquote>
                                        <h1>Análise e Posicionamento Tecnológico Empresarial </h1>
                                        <p>
                                            Somos analistas na essência, atuamos a mais de 20 anos focados em análise de problemas e proposições de soluções para as áreas de vendas, marketing e financeira de empresas de pequeno, médio e grande portes. 
                                        </p>

                                    </blockquote>
                                </div>
                            </li>
                            <li>
                                <div class="col-md-6">
                                    <div class="avatar"> <img src="images/intro-img2.jpg" alt="" class="img-responsive"> </div>
                                </div>
                                <div class="col-md-6">
                                    <blockquote>
                                        <h1>Desenvolvimento e Aplicação de Ferramentas Tecnológicas</h1>
                                        <p>
                                            Percebemos a necessidade de desenvolvimento de dispositivos para atender a situações pontuais de clientes. Compras de softwares de mercado e adaptações destes aplicativos à necessidade da empresa na maioria das vezes sai muito mais caro do que soluções pontuais bem focadas. Fugimos do gasto desnecessário criando essas soluções pertinentes a necessidades específicas analisadas caso a caso. O cliente é co-autor de cada trabalho entregue. 
                                        </p>
                                    </blockquote>
                                </div>
                            </li>
                            <li>
                                <div class="col-md-6">
                                    <div class="avatar"> 
                                        <img src="images/intro-img1.jpg" alt="" class="img-responsive">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <blockquote>
                                        <h1>Gestão de Presença Digital</h1>
                                        <p>
                                            Vamos além de sites bonitos. Visamos ações com rentabilidade para o cliente. Trabalhamos a internet como ferramenta ativa na economia em processos ou como ponto de comunicação com o público alvo da empresa. Geramos percepção de valor transformando site em canais de relacionamento.
                                        </p>
                                    </blockquote>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </section><!--end about section --> 

        <section id="services" class="services service-section"><!-- services section -->
            
            <div class="container">
                <div class="row">
                   
                    <div class="col-md-4 col-sm-6 services"> <span class="icon icon-strategy"></span>
                        <div class="services-content">
                            <h5>Análise de Dados</h5>
                            <p>
                                Atuamos para descobrir padrões de comportamento de clientes, fornecedores ou colaboradores e propor ações sobre estes padrões para maximizar resultados operacionais da companhia. Toda empresa possui uma grande quantidade de dados armazenados e o entendimento desses dados podem trazer ganhos expressivos em campanhas publicitarias, força de vendas e replanejamento comportamental.
                            </p>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-6 services"> <span class="icon icon-briefcase"></span>
                        <div class="services-content">
                            <h5>Análise de Processos</h5>
                            <p>
                                Realizamos o mapeamento dos processos core da empresa visando a documentação e ou reengenharia destes processos. Isso traz dois ganhos imediatos: 1o. A eliminação de pontos de fuga de recursos em processos seja por gargalos, passos desnecessários (burocracia), duplicação de processos ou divergência de padrões entre pessoas e/ou setores para um mesmo processo. 2o. A uniformidade de processo diminuindo a curva de aprendizado no turnover além de descentralização de conhecimento.
                            </p>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-6 services"> <span class="icon icon-tools"></span>
                        <div class="services-content">
                            <h5>Desenvolvimento de Sistemas</h5>
                            <p>
                                Desenvolvimento de programas focados em atender demandas especificas da empresa. Todo software desenvolvido por nós tem um propósito bem definido e critérios para mensuração de ROI.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">          
                    <div class="col-md-4 col-sm-6 services"> <span class="icon icon-genius"></span>
                        <div class="services-content">
                            <h5>Sistemas Web e Apps</h5>
                            <p>
                                Desenvolvimento de sites, hotsites, sistemas web e aplicativos que apoiem estratégias de negócio ou de marketing das empresas. Cada sistema web desenvolvido pela d.a.a.b já traz embarcado em si as tecnologias de monitoramento para acompanhamento de performance e resultado.
                            </p>
                        </div>
                    </div>
                    
                    <div class="col-md-4 col-sm-6 services"> <span class="icon icon-megaphone"></span>
                        <div class="services-content">
                            <h5>Análise Operacional</h5>
                            <p>
                                Conjunto de análises feitas com o intuito de mensurar os resultados obtidos por sites e aplicativos da empresa. Proposição de reengenharia com base nos resultados obtidos nas análises.
                            </p>
                        </div>
                    </div>
                                                            
                    <div class="col-md-4 col-sm-6 services"> <span class="icon icon-trophy"></span>
                        <div class="services-content">
                            <h5>Análise de Concorrência</h5>
                            <p>
                                Análise SWOT comparativa da empresa e suas principais concorrentes (Benchmarking). Levantamento Custo x Benefício de novas implementações. Estudo de aceitação da marca e marcas concorrentes.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section><!-- end services section --> 

        <section id="works" class="works section no-padding"><!-- work section -->
            <!--    
            <div class="container-fluid">
                <div class="row no-gutter">
                    <div class="col-lg-2 col-md-4 col-sm-4 work"> 
                        <a href="images/work-1.jpg" class="work-box"> 
                            <img src="images/work-1.jpg" alt="">
                            <div class="overlay">
                                <div class="overlay-caption">
                                    <p><span class="icon icon-magnifying-glass"></span></p>
                                </div>
                            </div>
                        </a> 
                    </div>
                            
                    <div class="col-lg-2 col-md-4 col-sm-4 work"> 
                        <a href="images/work-2.jpg" class="work-box"> 
                            <img src="images/work-2.jpg" alt="">
                            <div class="overlay">
                                <div class="overlay-caption">
                                    <p><span class="icon icon-magnifying-glass"></span></p>
                                </div>
                            </div>
                        </a> 
                    </div>
                    
                    <div class="col-lg-2 col-md-4 col-sm-4 work"> 
                        <a href="images/work-3.jpg" class="work-box"> 
                            <img src="images/work-3.jpg" alt="">
                            <div class="overlay">
                                <div class="overlay-caption">
                                    <p><span class="icon icon-magnifying-glass"></span></p>
                                </div>
                            </div>
                        </a> 
                    </div>

                    
      <div class="col-lg-2 col-md-4 col-sm-4 work"> <a href="images/work-4.jpg" class="work-box"> <img src="images/work-4.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        </a> </div>
      <div class="col-lg-2 col-md-4 col-sm-4 work"> <a href="images/work-5.jpg" class="work-box"> <img src="images/work-5.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        </a> </div>
      <div class="col-lg-2 col-md-4 col-sm-4 work"> <a href="images/work-6.jpg" class="work-box"> <img src="images/work-6.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        </a> </div>
      <div class="col-lg-2 col-md-4 col-sm-4 work"> <a href="images/work-7.jpg" class="work-box"> <img src="images/work-7.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        </a> </div>
      <div class="col-lg-2 col-md-4 col-sm-4 work"> <a href="images/work-8.jpg" class="work-box"> <img src="images/work-8.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        </a> </div>
      <div class="col-lg-2 col-md-4 col-sm-4 work"> <a href="images/work-9.jpg" class="work-box"> <img src="images/work-9.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        </a> </div>
      <div class="col-lg-2 col-md-4 col-sm-4 work"> <a href="images/work-10.jpg" class="work-box"> <img src="images/work-10.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        </a> </div>
      <div class="col-lg-2 col-md-4 col-sm-4 work"> <a href="images/work-11.jpg" class="work-box"> <img src="images/work-11.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        </a> </div>
      <div class="col-lg-2 col-md-4 col-sm-4 work"> <a href="images/work-12.jpg" class="work-box"> <img src="images/work-12.jpg" alt="">
        <div class="overlay">
          <div class="overlay-caption">
            <p><span class="icon icon-magnifying-glass"></span></p>
          </div>
        </div>
        </a> </div>
                        
                </div>
            </div>
        -->
        </section><!-- end work section -->

        <section id="teams" class="section teams"><!-- our team section -->
        <!-- 
            <div class="container">
                <div class="row"> 

                    <div class="col-md-4 col-sm-8">
                        <div class="person"> <img src="images/team-1.png" alt="" class="img-responsive">
                            <div class="person-content">
                                <h4>Johnathan Doe</h4>
                                <h5 class="role">The Mastermind</h5>
                                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. </p>
                            </div>
                            <ul class="social-icons clearfix">
                                <li><a href="#"><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#"><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#"><span class="fa fa-linkedin"></span></a></li>
                                <li><a href="#"><span class="fa fa-google-plus"></span></a></li>
                                <li><a href="#"><span class="fa fa-dribbble"></span></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-8">
                        <div class="person"> <img src="images/team-2.png" alt="" class="img-responsive">
                            <div class="person-content">
                                <h4>Lisa Brown</h4>
                                <h5 class="role">Creative head</h5>
                                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                            </div>
                            <ul class="social-icons clearfix">
                                <li><a href="#" class=""><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#" class=""><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#" class=""><span class="fa fa-linkedin"></span></a></li>
                                <li><a href="#" class=""><span class="fa fa-google-plus"></span></a></li>
                                <li><a href="#" class=""><span class="fa fa-dribbble"></span></a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-4 col-sm-8">
                        <div class="person"> <img src="images/team-3.png" alt="" class="img-responsive">
                            <div class="person-content">
                                <h4>Mike Collins</h4>
                                <h5 class="role">Technical lead</h5>
                                <p>Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus.</p>
                            </div>
                            <ul class="social-icons clearfix">
                                <li><a href="#" class=""><span class="fa fa-facebook"></span></a></li>
                                <li><a href="#" class=""><span class="fa fa-twitter"></span></a></li>
                                <li><a href="#" class=""><span class="fa fa-linkedin"></span></a></li>
                                <li><a href="#" class=""><span class="fa fa-google-plus"></span></a></li>
                                <li><a href="#" class=""><span class="fa fa-dribbble"></span></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        --> 
        </section><!-- end our team section --> 

        <section id="testimonials" class="section testimonials no-padding"><!-- Testimonials section -->

            <!--
            <div class="container-fluid">
            <div class="row no-gutter">
            <div class="flexslider">
            <ul class="slides">
            <li>
            <div class="col-md-12">
              <blockquote>
                <h1>"Integer posuere erat a ante venenatis dapibus posuere velit aliquet. Donec sed odio dui. Phasellus non dolor nibh. Nullam elementum Aenean eu leo quam..." </h1>
                <p>Rene Brown, Open Window production</p>
              </blockquote>
            </div>
            </li>
            <li>
            <div class="col-md-12">
              <blockquote>
                <h1>"Cras dictum tellus dui, vitae sollicitudin ipsum. Phasellus non dolor nibh. Nullam elementum tellus pretium feugiat shasellus non dolor nibh. Nullam elementum tellus pretium feugiat." </h1>
                <p>Brain Rice, Lexix Private Limited.</p>
              </blockquote>
            </div>
            </li>
            <li>
            <div class="col-md-12">
              <blockquote>
                <h1>"Cras mattis consectetur purus sit amet fermentum. Donec sed odio dui. Aenean lacinia bibendum nulla sed consectetur...." </h1>
                <p>Andi Simond, Global Corporate Inc</p>
              </blockquote>
            </div>
            </li>
            <li>
            <div class="col-md-12">
              <blockquote>
                <h1>"Lorem ipsum dolor sit amet, consectetur adipiscing elitPhasellus non dolor nibh. Nullam elementum tellus pretium feugiat. Cras dictum tellus dui sollcitudin." </h1>
                <p>Kristy Gabbor, Martix Media</p>
              </blockquote>
            </div>
            </li>
            </ul>
            </div>
            </div>
            </div>
            -->
        </section><!-- end Testimonials section --> 

        <section id="contact" class="section quote"><!-- Get a quote section -->
                
            <div class="container">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <h3>Procurando Soluções Tecnológicas? Vamos trabalhar juntos?!</h3>
                    <a href="views/faleconosco.php" class="btn btn-large">Fale Conosco</a> </div>
                </div>

        </section><!-- End Get a quote section --> 

        <footer class="footer"><!-- Footer section -->
            
            <div class="footer-top section">
                <div class="container">
                    <div class="row">
                        
                        <div class="footer-col col-md-6">
                            <h5>Onde Estamos</h5>
                            <p>
                                Rua Jornalista Henrique Cordeiro 310/805.<br>
                                Barra de Tijuca - RJ.<br>
                                21 9 7373-9019<br>
                                suporte@daab.com.br
                            </p>
                            <!--
                            <p>
                                Copyright © 2015 Flosix Inc. All Rights Reserved. Made with 
                                <i class="fa fa-heart pulse"></i> by 
                                <a href="http://www.designstub.com/">Designstub</a>
                            </p>
                            -->    
                        </div>
                        
                        <div class="footer-col col-md-3">
                            <h5>Nossos Serviços</h5>
                            <ul>
                                <li><a href="#">Estratégia e Consultoria</a></li>
                                <li><a href="#">Mapeamento de processos</a></li>
                                <li><a href="#">Desenvolvimento e Web Design</a></li>
                            </ul>
                        </div>
                        
                        <div class="footer-col col-md-3">
                            <h5>Compartilhe-nos à vontade</h5>
                            <ul class="footer-share">
                                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                                <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
			
        </footer><!-- Footer section --> 

        <section id="scripts">
            <!-- JS FILES -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> 
            <script src="js/bootstrap.min.js"></script> 
            <script src="js/jquery.flexslider-min.js"></script> 
            <script src="js/jquery.fancybox.pack.js"></script> 
            <script src="js/retina.min.js"></script> 
            <script src="js/modernizr.js"></script> 
            <script src="js/main.js"></script>
        </section>
    </body>
</html>
