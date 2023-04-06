<?php

$nome = $_POST['nome'];
$sobrenome = $_POST['sobrenome'];
$email = $_POST['email'];
$cidade = $_POST['cidade'];
$estado = $_REQUEST['estado'];
$telefone = $_POST['telefone'];

$arquivo = fopen('clientes.csv', 'a');
fwrite($arquivo, $nome . ",");
fwrite($arquivo, $sobrenome . ",");
fwrite($arquivo, $email . ",");
fwrite($arquivo, $cidade . ",");
fwrite($arquivo, $estado . ",");
fwrite($arquivo, $telefone . "\n");

fclose($arquivo);
 header("location:index.php?mensagem=salvar")
?>
