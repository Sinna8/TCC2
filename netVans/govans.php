<?php
require_once "conexao.php"
?>
    <!DOCTYPE html>
    <html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>NetVans!!</title>
        <link rel="stylesheet" href="css/estilo.css">
        <link rel="stylesheet" href="css/bootstrap.css"/>
    </head>
    <body>


    <!-- IMAGEM DE FUNDO -->
    <body background="imagens/fundo1.jpg"></body>


    <!-- MENU -->
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">Home</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="active"><a href="quemsomos.php">Quem somos? <span class="sr-only">(current)</span></a></li>
                    <li><a href="contato.php">Contato</a></li>

                </ul>
                <form class="navbar-form navbar-left" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default">Buscar</button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="#">Fazer</a></li>
                    <a type="button" href="login.php" style="width: 60px; height: 33px;position: relative;top: 7px;" class="btn btn-default">Login</a>
                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>



    <!-- CORPO -->
    <div id="interface">
        <header id="cabecalho">
            <hgroup>

                <h1 id="inicio1"><a href="index.php"><img id="logo" src="imagens/logo3.png"></h1></a>

            </hgroup>
        </header>
        </div>




    <!-- CADASTRAR

    <div class="input-group">
        <span class="input-group-addon" id="basic-addon1">@</span>
        <input type="text" class="form-control" placeholder="Username" aria-describedby="basic-addon1">
    </div>

    <div class="input-group">
        <input type="text" class="form-control" placeholder="Recipient's username" aria-describedby="basic-addon2">
        <span class="input-group-addon" id="basic-addon2">@example.com</span>
    </div>

    <div class="input-group">
        <span class="input-group-addon">$</span>
        <input type="text" class="form-control" aria-label="Amount (to the nearest dollar)">
        <span class="input-group-addon">.00</span>
    </div>

    <label for="basic-url">Your vanity URL</label>
    <div class="input-group">
        <span class="input-group-addon" id="basic-addon3">https://example.com/users/</span>
        <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3">
    </div>

    -->


<div id="classificacao">
<form>
<table id="buscaClassificacao">
    <tr><td><input type="text" name="buscarVan" class="txt1" placeholder="Digite seu CEP ou Endereço"><button type="submit"><img src="imagens/ask.png" class="imagemask"></button></td></tr>
</table>
<table id="classificacaoTabela">

    <tr>
        <td class="img"><button><img src="imagens/van1.png" class="imgVan"></button><br/>Escolares</td>
        <td class="img"><button><img src="imagens/van2.png" class="imgVan"></button><br/>Facultativas</td>
    </tr>

    <tr>
        <td class="img"><button><img src="imagens/van3.png" class="imgVan"></button><br/>Fretados</td>
        <td class="img"><button><img src="imagens/van4.png" class="imgVan"></button><br/>Excursões</td>
    </tr>

</table>
</form>
</div>
















    <!--footer-->
    <footer class="footer1">
        <div class="container">

            <div class="row"><!-- row -->

                <div class="col-lg-3 col-md-3"><!-- widgets column left -->
                    <ul class="list-unstyled clear-margins"><!-- widgets -->

                        <li class="widget-container widget_nav_menu"><!-- widgets list -->

                            <h1 class="title-widget">Links NetVans</h1>

                            <ul>
                                <li><a  href="#"><i class="fa fa-angle-double-right"></i> Sobre nós</a></li>
                                <li><a  href="#"><i class="fa fa-angle-double-right"></i> Contate-nos</a></li>
                                <li><a  href="#"><i class="fa fa-angle-double-right"></i> Nossas histórias</a></li>
                                <li><a  href="#"><i class="fa fa-angle-double-right"></i> Testes & Implementações</a></li>
                                <li><a  href="#"><i class="fa fa-angle-double-right"></i> Agilidade em serviço</li>
                            </ul>

                        </li>

                    </ul>


                </div><!-- widgets column left end -->



                <div class="col-lg-3 col-md-3"><!-- widgets column left -->

                    <ul class="list-unstyled clear-margins"><!-- widgets -->

                        <li class="widget-container widget_nav_menu"><!-- widgets list -->

                            <h1 class="title-widget">Central NetVans</h1>

                            <ul>
                                <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Futuro do nosso projeto</a></li>
                                <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Calendario de implementações </a></li>
                                <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Desenvolvedores</a></li>
                                <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Ajuda </a></li>
                                <li><a  href="#"><i class="fa fa-angle-double-right"></i>  Resultados</a></li>

                            </ul>

                        </li>

                    </ul>


                </div><!-- widgets column left end -->



                <div class="col-lg-3 col-md-3"><!-- widgets column left -->

                    <ul class="list-unstyled clear-margins"><!-- widgets -->

                        <li class="widget-container widget_nav_menu"><!-- widgets list -->

                            <h1 class="title-widget">Biblioteca NetVans</h1>

                            <ul>


                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Informações</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Testes</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Futuros testes</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Biblioteca</a></li>
                                <li><a href="#"><i class="fa fa-angle-double-right"></i> Nossos Videos</a></li>


                            </ul>

                        </li>

                    </ul>


                </div><!-- widgets column left end -->


                <div class="col-lg-3 col-md-3"><!-- widgets column center -->



                    <ul class="list-unstyled clear-margins"><!-- widgets -->

                        <li class="widget-container widget_recent_news"><!-- widgets list -->

                            <h1 class="title-widget">Contatos </h1>

                            <div class="footerp">

                                <h2 class="title-median">NetVans Ltda</h2>
                                <p><b>Email :</b> <a href="mailto:info@webenlance.com">contato@netvans.com</a></p>
                                <p><b>Horários </b>

                                    <b style="color:#5395fd;">(8 Horas às 16 horas):</b>  +55-11 975925925 </p>

                                <p><b>Endereço</b></p>
                                Rua Antonio Agu
                                Centro, Osasco - SP, 06013-000, </p>
                                <p> 11-35926735</p>
                            </div>

                            <div class="social-icons">

                                <ul class="nomargin">

                                    <a href="https://www.facebook.com/bootsnipp"><i class="fa fa-facebook-square fa-3x social-fb" id="social"></i></a>
                                    <a href="https://twitter.com/bootsnipp"><i class="fa fa-twitter-square fa-3x social-tw" id="social"></i></a>
                                    <a href="https://plus.google.com/+Bootsnipp-page"><i class="fa fa-google-plus-square fa-3x social-gp" id="social"></i></a>
                                    <a href="mailto:bootsnipp@gmail.com"><i class="fa fa-envelope-square fa-3x social-em" id="social"></i></a>

                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <!--header-->

    <div class="footer-bottom">

        <div class="container">

            <div class="row">

                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6">

                    <div class="copyright">

                        © 2017, Webdesign, All rights reserved Turma Sistemas de Informação 8º Semestre.

                    </div>

                </div>



            </div>

        </div>

    </div>











    </html>

