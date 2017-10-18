<html>
<head>
    <link rel="stylesheet" href="index.php">
    <title>Cadastrado</title>
</head>
<body>


<?php
include "conexao.php";


$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$estado = $_POST['estado'];
$cidade = $_POST['cidade'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = @mysql_query("INSERT INTO cadastro(nome, sobrenome, estado, cidade, telefone, email, senha)
VALUES ('$nome','$sobrenome','$estado','$cidade','$telefone','$email', '$senha')")

?>

</body>
</html>

