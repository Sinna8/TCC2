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
            <td><h4>Titulo: </h4> <input placeholder="Titulo do Anuncio" style="width: 285px; border-right: 2px;"> </td>

        </tr><br>



        <tr>
            <td><h4>Descrição:</h4> <textarea rows="6" cols="33" style="border-right: 2px;"></textarea></td>
        </tr>

        <tr>
            <td>CEP Inicial: <input placeholder="CEP do ponto de partida" style="border-right: 2px;"></td>
        </tr>

        <tr></tr> <tr></tr> <tr></tr>







        <tr>
            <td>

                <script type="text/javascript">
                    //Total máximo de campos que você permitirá criar em seu site:
                    var totalCampos = 10;

                    //Não altere os valores abaixo, pois são variáveis controle;
                    var iLoop = 1;
                    var iCount = 0;
                    var linhaAtual;


                    function AddCampos() {
                        var hidden1 = document.getElementById("hidden1");
                        var hidden2 = document.getElementById("hidden2");

                        //Executar apenas se houver possibilidade de inserção de novos campos:
                        if (iCount < totalCampos) {

                            //Limpar hidden1, para atualizar a lista dos campos que ainda estão vazios:
                            hidden2.value = "";

                            //Atualizando a lista dos campos que estão ocultos.
                            //Essa lista ficará armazenada temporiariamente em hidden2;
                            for (iLoop = 1; iLoop <= totalCampos; iLoop++) {
                                if (document.getElementById("linha"+iLoop).style.display == "none") {
                                    if (hidden2.value == "") {
                                        hidden2.value = "linha"+iLoop;
                                    }else{
                                        hidden2.value += ",linha"+iLoop;
                                    }
                                }
                            }
                            //Quebrando a lista que foi armazenada em hidden2 em array:

                            linhasOcultas = hidden2.value.split(",");


                            if (linhasOcultas.length > 0) {
                                //Tornar visível o primeiro elemento de linhasOcultas:
                                document.getElementById(linhasOcultas[0]).style.display = "block"; iCount++;

                                //Acrescentando o índice zero a hidden1:
                                if (hidden1.value == "") {
                                    hidden1.value = linhasOcultas[0];
                                }else{
                                    hidden1.value += ","+linhasOcultas[0];
                                }
                            }
                        }
                    }

                    function RemoverCampos(id) {
                        //Criando ponteiro para hidden1:
                        var hidden1 = document.getElementById("hidden1");

                        //Pegar o valor do campo que será excluído:
                        var campoValor = document.getElementById("arq"+id).value;
                        //Se o campo não tiver nenhum valor, atribuir a string: vazio:
                        if (campoValor == "") {
                            campoValor = "vazio";
                        }

                        if(confirm("O campo que contém o valor:\n» "+campoValor+"\nserá excluído!\n\nDeseja prosseguir?")){
                            document.getElementById("linha"+id).style.display = "none"; iCount--;

                            //Removendo o valor de hidden1:
                            if (hidden1.value.indexOf(",linha"+id) != -1) {
                                hidden1.value = hidden1.value.replace(",linha"+id,"");
                            }else if (hidden1.value.indexOf("linha"+id+",") == 0) {
                                hidden1.value = hidden1.value.replace("linha"+id+",","");
                            }else{
                                hidden1.value = "";
                            }
                        }
                    }
                </script>
                </head>
                <body>
                <form name="form1" action="paginaPHPouASP" method="post">

                    <script type="text/javascript">
                        //Escrevendo o código-fonte HTML e ocultando os campos criados:
                        for (iLoop = 1; iLoop <= totalCampos; iLoop++) {
                            document.write("<span id='linha"+iLoop+"' style='display:none'>CEP"+iLoop+": <input type='text' id='arq"+iLoop+"' name='arq"+iLoop+"' style='width: 235.8px; border-right: 2px;' ><input type='button' value='Remover' onclick='RemoverCampos(\""+iLoop+"\")'><br> </span>") ;
                        }
                    </script>

                    CEPs: <input type="text" placeholder="CEP por onde voce passa" style="width: 237px; border-right: 2px;"><input type="button" value="+" onclick="AddCampos()">


                    <br><br>
                    <br><br><input type="hidden" name="hidden1" id="hidden1">
                    <br>


                    <input type="hidden" name="hidden2" id="hidden2">
            </td>
        </tr>

        <tr>
            <td> Inserir fotos <input type="button" value="Pesquisar"></td>
        </tr>



        <tr></tr><tr></tr><tr></tr><tr></tr>
        <tr></tr><tr></tr><tr></tr><tr></tr>
        <tr>
            <td><input type="button" value="Anunciar"> </td>
        </tr>

    </table>



    </body>




</html>

