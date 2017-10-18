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






<!-- CORPO -->
<div id="interface">
    <header id="cabecalho">
        <hgroup>

            <h1 id="inicio1"><img id="logo" src="imagens/logo3.png" style="position: absolute; top: 1%;"></h1>

        </hgroup>
    </header>
</div>


    <table style="position: absolute; top: 30%; left: 1%; padding: 1px; width: 10%; border-collapse: separate; border-spacing: 0 8px;">
        <tr>
            <td> Exluir Anuncio:<input type="text" placeholder="Digite o ID para excluir Anuncio" style="width: 239px; border-right: 2px;"></td>
        </tr>


        <tr>
            <td><input type="button" value="Executar"> </td>
        </tr>


        <tr>
            <td> Resgatar Anuncio:<input type="text" placeholder="Digite o ID para resgatar Anuncio" style="width: 239px; border-right: 2px;"></td>
        </tr>


        <tr>
            <td><input type="button" value="Executar"> </td>
        </tr>

    </table>





</body>




</html>

