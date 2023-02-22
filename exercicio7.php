<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 07 PHP</title>
</head>

<body>
    <h2>Faça um Programa que pergunte em que turno você estuda. Peça para digitar M-matutino <br>
        ou V-Vespertino ou N- Noturno. Imprima a mensagem "Bom Dia!",<br>
        "Boa Tarde!" ou "Boa Noite!" ou "Valor Inválido!"</h2><br>

    <form action="" method="get">
        <label>Que turno você estuda?</label>
        <select name="turno">
            <option value="">Selecione</option>
            <option value="m">M</option>
            <option value="v">V</option>
            <option value="n">N</option>
        </select>
        <button type="submit">Exibir</button>
    </form>

    <?php
    $turno = $_GET['turno'];
    
    if($turno == 'm'){
    echo 'Bom dia!'; 
    }if(($turno == 'v')){
     echo  "Boa Tarde!";
    
    }if(($turno == 'n')){
     echo  "Boa Noite!";
    
    }
    ?>
</body>

</html>