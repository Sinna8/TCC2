<?php
require_once "conexao.php";

session_start();
$nome = $_SESSION['nome'];

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
                <li class="active"><a href="#">Quem somos? <span class="sr-only">(current)</span></a></li>
                <li><a href="#">Contato</a></li>

            </ul>
            <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Buscar</button>
                <div class="form-group2">
                <?php echo "Bem-Vindo $nome" ?>
                </div>
                <a href="logout.php" class="sair">
                Sair</a>
            </form>

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


<div id="perfil" class="col-md-2 col-md-offset-0">
    <img src="imagens/perfil.jpg" style="height: 20%;
                                 border-width: 1px;
                                 border-style: solid;
                                 border-color: white white" ><br><br>
    <label>Nome: </label><br>
    <label>Cidade: </label><br>
    <label>Telefone: </label><br><br>

    <a href="#" onclick="window.open('http://localhost/netvans/criaAnuncio.php', 'Pagina', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=10, LEFT=10, WIDTH=770, HEIGHT=400');">Criar Anuncio</a><br>
    <a href="#" onclick="window.open('http://localhost/netvans/editaAnuncio.php', 'Pagina', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=10, LEFT=10, WIDTH=770, HEIGHT=400');">Editar Anuncio</a><br>
    <a href="#" onclick="window.open('http://localhost/netvans/gerenciaAnuncio.php', 'Pagina', 'STATUS=NO, TOOLBAR=NO, LOCATION=NO, DIRECTORIES=NO, RESISABLE=NO, SCROLLBARS=YES, TOP=10, LEFT=10, WIDTH=770, HEIGHT=400');">Gerenciar Anuncio</a><br>
    <a href="#">Ajuda</a><br>

</div>


<div id="viewAnuncio" class="">

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

                                <a href="index.php"><i class="fa fa-facebook-square fa-3x social-fb" id="social"></i></a>
                                <a href="index.php"><i class="fa fa-twitter-square fa-3x social-tw" id="social"></i></a>
                                <a href="index.php"><i class="fa fa-google-plus-square fa-3x social-gp" id="social"></i></a>
                                <a href="index.php"><i class="fa fa-envelope-square fa-3x social-em" id="social"></i></a>

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



</body>




</html>

<?php
if(@$_GET['go'] == 'logar'){
    $user = $_POST['usuario'];
    $pwd = $_POST['senha'];

    if(empty($user)){
        echo "<script>alert('Preencha todos os campos para logar-se.'); history.back();</script>";
    }elseif(empty($pwd)){
        echo "<script>alert('Preencha todos os campos para logar-se.'); history.back();</script>";
    }else{
        $query1 = mysql_num_rows(mysql_query("SELECT * FROM USUARIO WHERE USUARIO = '$user' AND SENHA = '$pwd'"));
        if($query1 == 1){
            echo "<script>alert('Usuário logado com sucesso.');</script>";
            echo "<meta http-equiv='refresh' content='0, url=govans.php'>";
        }else{
            echo "<script>alert('Usuário e senha não correspondem.'); history.back();</script>";
        }
    }
}



?>