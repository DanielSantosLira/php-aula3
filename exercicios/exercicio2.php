<!DOCTYPE html>
<html lang="pr-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 02 PHP</title>
</head>

<body>
    <form action="">
        Digite um caractere: <input type="text" name="carac"><br>
        <button type="submit">Testar</button>
    </form>

    <?php
$meuCaractere = $_GET['carac'];
if(ctype_digit($meuCaractere))
   echo "é digito";
   else
   echo "Não é digito";

    ?>
</body>

</html>