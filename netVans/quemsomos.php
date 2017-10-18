<?php
require_once "conexao.php";
require_once "menu.php";
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







<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">








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








</html>

<?php
if(@$_GET['go'] == 'cadastrar'){
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $estado = $_POST['estado'];
    $cidade = $_POST['cidade'];
    $email = $_POST['email'];
    $user = $_POST['usuario'];
    $pwd = $_POST['senha'];

    if(empty($nome)){
        echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
    }

    if(empty($sobrenome)){
        echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
    }


    elseif(empty($email)){
        echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
    }

    elseif(empty($user)){
        echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
    }


    elseif(empty($pwd)){
        echo "<script>alert('Preencha todos os campos para se cadastrar.'); history.back();</script>";
    }

    else{
        $query1 = mysql_num_rows(mysql_query("SELECT * FROM USUARIO WHERE USUARIO = '$user'"));
        if($query1 == 1){
            echo "<script>alert('Usuário já existe.'); history.back();</script>";
        }else{
            mysql_query("insert into usuario (nome,sobrenome,estado, cidade, email, usuario, senha) values ('$nome','$sobrenome','$estado','$cidade', '$email','$user','$pwd')");
            echo "<script>alert('Usuário cadastrado com sucesso.');</script>";
            echo "<meta http-equiv='refresh' content='0, url=./'>";
        }
    }
}

?>
