<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aula 3 PHP exercicio 01</title>
</head>

<body>
    <h1>Faça um script que peça 3 notas de um aluno e mostre sua media </h1>
    <form action=" " method="get">
        Nota 1: <input type="text" name="num1"> <br>
        Nota 2: <input type="text" name="num2"> <br>
        Nota 3: <input type="text" name="num3"> <br>

        <button type="submit" >Calcular</button>

    </form>

    <!-- aqui começa o php -->
    <?php
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $num3 = $_GET['num3'];

    $media = ($num1 + $num2 + $num3) / 3;
    echo "Média: $media";
    ?>
</body>

</html>