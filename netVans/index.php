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
    <script type="text/javascript" src="http://cidades-estados-js.googlecode.com/files/cidades-estados-v0.2.js"></script>

</head>
<body>


<!-- IMAGEM DE FUNDO -->
<body background="imagens/fundo1.jpg"></body>





<!-- CORPO -->
<div id="interface">
    <header id="cabecalho">
        <hgroup>

            <h1 id="inicio1"><a href="index.php"><img id="logo" src="imagens/logo3.png"></h1></a>
            <h2 id="inicio2">Seja bem vindo <img id="curtir" src="imagens/Curtir.png"></h2>
        </hgroup>
    </header>



<!-- MAPEAMENTO -->
    <section id="mapeamento">
        <img id="mapaBrasil" src="imagens/mapa.png" usemap="#meumapa" style="height: 65%"/>
        <map name="meumapa">
            <area id="Amazonas" shape="rect" coords="60,78,147,135" href="govans.php" target="janela"/>
            <area id="Acre" shape="rect" coords="21,169,61,198" href="govans.php" target="janela"/>
            <area id="Rondonia" shape="rect" coords="107,167,143,193" href="govans.php" target="janela"/>
            <area id="Roraima" shape="rect" coords="126,18,163,48" href="govans.php" target="janela"/>
            <area id="Para" shape="rect" coords="205,92,273,137" href="govans.php" target="janela"/>
            <area id="Amapa" shape="rect" coords="227,35,266,61" href="govans.php" target="janela"/>
            <area id="matoGrosso" shape="rect" coords="161,167,244,228" href="govans.php" target="janela"/>
            <area id="matoGrossoSul" shape="rect" coords="186,253,244,302" href="govans.php" target="janela"/>
            <area id="Parana" shape="rect" coords="209,315,252,338" href="govans.php" target="janela"/>
            <area id="santaCatarina" shape="rect" coords="250,343,290,371" href="govans.php" target="janela"/>
            <area id="rioGrandeSul" shape="rect" coords="200,370,240,400" href="govans.php" target="janela"/>
            <area id="Maranhao" shape="rect" coords="300,100,334,128" href="govans.php" target="janela"/>
            <area id="Tocantins" shape="rect" coords="263,167,300,194" href="govans.php" target="janela"/>
            <area id="Goiais" shape="rect" coords="250,231,280,250" href="govans.php" target="janela"/>
            <area id="saoPaulo" shape="rect" coords="260,290,300,315" href="govans.php" target="janela"/>
            <area id="Piaui" shape="rect" coords="330,130,360,160" href="govans.php" target="janela"/>
            <area id="Bahia" shape="rect" coords="340,190,380,220" href="govans.php" target="janela"/>
            <area id="minasGerais" shape="rect" coords="290,246,350,285" href="govans.php" target="janela"/>
            <area id="riJaneiro" shape="rect" coords="328,296,364,317" href="govans.php" target="janela"/>
            <area id="espiritoSanto" shape="rect" coords="365,266,393,296" href="govans.php" target="janela"/>
            <area id="Ceara" shape="rect" coords="360,100,393,128" href="govans.php" target="janela"/>
            <area id="RS-PA-PE-AL" shape="rect" coords="386,136,428,165" href="govans.php" target="janela"/>

        </map>
    </section>


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

<div id="mapa">
    <h1>Clique na Van</h1>
    <h2>E comece a buscar</h2>
</div>





<div id="cadastro">
    <form method="post" action="?go=cadastrar">
        <h2 style="font-family: Sylfaen; position: absolute; left: 70%; top: 20%;" ">Cadastre-se aqui</h2>
        <table id="cad_table">
            <tr>
                <td style="font-family: Sylfaen">Nome:</td>
                <td><input type="text" name="nome" id="nome" class="txt2" /></td>
            </tr>

            <tr>
                <td style="font-family: Sylfaen">Sobrenome:</td>
                <td><input type="text" name="sobrenome" id="sobrenome" class="txt2" /></td>
            </tr>
            <tr>
                <td style="font-family: Sylfaen">Estado:</td>
                <td><select type="text" name="estado" id="estado" class="txt2">
                        <option>Selecione o estado...</option>
                        <option> Acre </option>
                        <option> Alagoas	</option>
                        <option> Amapá	</option>
                        <option> Amazonas	</option>
                        <option> Bahia	</option>
                        <option> Ceará	</option>
                        <option> Distrito Federal	</option>
                        <option> Espírito Santo	</option>
                        <option> Goiás	</option>
                        <option> Maranhão	</option>
                        <option> Mato Grosso	</option>
                        <option> Mato Grosso do Sul	</option>
                        <option> Minas Gerais	</option>
                        <option> Pará	</option>
                        <option> Paraíba	</option>
                        <option> Paraná	</option>
                        <option> Pernambuco	</option>
                        <option> Piauí	</option>
                        <option> Rio de Janeiro	</option>
                        <option> Rio Grande do Norte	</option>
                        <option> Rio Grande do Sul	</option>
                        <option> Rondônia	</option>
                        <option> Roraima	</option>
                        <option> Santa Catarina	</option>
                        <option> São Paulo	</option>
                        <option> Sergipe	</option>
                        <option> Tocantins </option>
                    </select></td>
            </tr>


            <tr>
                <td style="font-family: Sylfaen">Email:</td>
                <td><input type="text" name="email" id="email" class="txt2" /></td>
            </tr>
            <tr>
                <td style="font-family: Sylfaen">Usuário:</td>
                <td><input type="text" name="usuario" id="usuario" class="txt2" maxlength="15" /></td>
            </tr>
            <tr>
                <td style="font-family: Sylfaen">Senha:</td>
                <td><input type="password" name="senha" id="senha" class="txt2" maxlength="15" /></td>
            </tr>
            <tr>
                <td colspan="2" style="font-family: Sylfaen"><input type="submit" value="Cadastrar" id="botao1">
                    &nbsp;

                </td>
            </tr>
        </table>
    </form>
</div>

</body>

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
    $email = $_POST['email'];
    $user = $_POST['usuario'];
    $pwd = $_POST['senha'];

    if(empty($nome)){
        echo "<script>alert('Preencha todos os campos para se cadastrar.'); </script>";
    }

    if(empty($sobrenome)){
        echo "<script>alert('Preencha todos os campos para se cadastrar.'); </script>";
    }


    elseif(empty($email)){
        echo "<script>alert('Preencha todos os campos para se cadastrar.'); </script>";
    }

    elseif(empty($user)){
        echo "<script>alert('Preencha todos os campos para se cadastrar.'); </script>";
    }


    elseif(empty($pwd)){
        echo "<script>alert('Preencha todos os campos para se cadastrar.'); </script>";
    }

    else{
        $query = $mysqli->query("SELECT usuario_id FROM USUARIO WHERE USUARIO = '$user'")or die(mysqli_error($mysqli));
        $query1 = mysqli_num_rows($query);

        if($query1 == 1){
            echo "<script>alert('Usuário já existe.'); </script>";
        }else{
            //$pwd = md5('$pwd');
            //$estado = htmlentities($estado, ENT_COMPAT, 'utf-8');
            $query = $mysqli->query("insert into usuario (nome,sobrenome,estado, email, usuario, senha) values ('$nome','$sobrenome','$estado', '$email',
                '$user','$pwd')")or die(mysqli_error($mysqli));
            $_SESSION['nome'] = $nome;
            $_SESSION['sobrenome'] = $sobrenome;
            echo "<script>alert('Usuário cadastrado com sucesso.');</script>";
            echo "<meta http-equiv='refresh' content='0, url=login.php'>";
            session_start();

        }
    }
}


?>
