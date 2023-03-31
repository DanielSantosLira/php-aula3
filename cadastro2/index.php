<?php

$cliente = ["Renata", "Alan", "Ingredi", "Sara", "kleber"];
$arquivo = fopen("cliente-novo.txt", "a");

 $i = 0;

  while($i < count($cliente)){
    echo $cliente[$i] . "<br>";
    fwrite($arquivo, $cliente[$i] . "\n");
    $i++;
  }

?>
