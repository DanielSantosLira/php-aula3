<?php

$nome = $_POST['nome'];
$cidade = $_POST['cidade'];
$telefone = $_POST['telefone'];
$email = $_POST['email'];

echo "$nome - $cidade - $telefone - email";



$arquivo = fopen("cliente.txt", "a");

fwrite($arquivo, $nome . "\t");
fwrite($arquivo, $cidade ."\t");
fwrite($arquivo, $telefone ."\t");
fwrite($arquivo, $email ."\t");

fclose($arquivo);

header("location:index.php");

?>
