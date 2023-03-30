<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Exercicio 02 Número impar</title>
</head>

<body>
    <?php

    $numero = 1;


    while ($numero <= 100) {
        if ($numero % 2 == 1){
           
            echo $numero . "<br>";
        }
        $numero++;
        
    }

    ?>

</body>

</html>