<?php
 $nome = $_POST['nome'] ?? "";
 $email = $_POST['email'] ?? "";
 $telefone = $_POST['tel'] ?? "";
 $rua = $_POST['rua'] ?? "";
 $bairro = $_POST['bairro'] ?? "";
 $complemento = $_POST['comple'] ?? "";
 $cidade = $_POST['cid'] ?? "";
 $estado= $_POST['est'] ?? "";
 $datadenacimento = $_POST['dtn'] ?? "";
$cpf = $_POST['cpf']?? "";
$rg = $_POST['rg']?? "";
$whatsapp  = $_POST["whats"] ?? "";
$babida  = $_POST["bebida"] ?? "";

echo $_POST['nome']  ;
echo "<br>";
echo $_POST['email'];
echo "<br>";
echo $_POST['tel'];
echo $_POST['rua']  ;
echo "<br>";
echo $_POST['bairro'];
echo "<br>";
echo $_POST['comple'];
echo $_POST['cid']  ;
echo "<br>";
echo $_POST['est'];
echo "<br>";
echo $_POST['dtn'];
echo $_POST['cpf']  ;
echo "<br>";
echo $_POST['rg'];
echo "<br>";
echo $_POST['whats'];
echo "<br>";
echo $_POST['bebida'];


?>