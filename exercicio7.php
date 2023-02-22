<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 07 PHP</title>
</head>

<body>
    <form action=""  method="get">
    <label>Que turno você estuda?</label>
        <select id="turno">
        <option value="">Selecione</option>
        <option value="m">M</option>
        <option value="v">V</option>
        <option value="n">N</option>
        </select>
        <button type="submit">Exibir</button>
    </form>
    
    <?php
      $turno1 = $_GET['m'];
      $turno2 = $_GET['v'];
      $turno3 =$_GET ['n'];

      $turno1 = ('m');
      echo 'Bom dia'. $turno1;
    
    ?>
</body>

</html>