<?php

 $nome = $_POST["nome"] ?? "";

 $email = $_POST['email'] ?? "";

 $telefone = $_POST['telefone'] ?? "";

 $rua = $_POST['rua'] ?? "";

 $bairro = $_POST['bairro'] ?? "";

 $complemento = $_POST['complemento'] ?? "";

 $cidade = $_POST['cidade'] ?? "";

 $estado= $_POST['estado'] ?? "";

 $datadenacimento = $_POST['datadenacimento'] ?? "";

$cpf = $_POST['cpf']?? "";

$rg = $_POST['rg']?? "";

$whatsapp  = $_POST["whats"] ?? "";

$bebida  = $_POST["bebida"] ?? "";


echo "Nome: $nome <br>";

echo "E-mail: $email <br>";

echo "Telefone: $telefone <br>";

echo "Rua: $rua <br>";

echo "Bairro: $bairro <br>";

echo "Complemento: $complemento <br>";

echo "Cidade: $cidade <br>";

echo "Estado: $estado <br>";

echo "Data de Nacimento: $datadenacimento <br>";

echo "CPG: $cpf <br>";

echo "RG: $rg <br>";

echo "Whastsapp: $whatsapp <br>";

echo "Bebida: $bebida <br>";




?>