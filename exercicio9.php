<?php
/* Problema: verificar se a idade da
pessoa é maior ou igual de 18 anos,
se for mostrar a mensagem "PODE DIRIGIR"
senão nãp mostar nada
 */

$idade = 19;

if ($idade >= 18) {
   echo "Pode Dirigir";
}

echo "<hr>";

/* Problema: verificar se a idade da
pessoa é maior ou igual de 18 anos,
se for mostrar a mensagem "PODE DIRIGIR"
senão não mostar mensagem "menor de idade"
 */


$idade = 15;

if ($idade >= 18) {
   echo "Pode Dirigir";
} else {
   echo "Menor de Idade";
}

echo "<hr>";

/* Problema: verificar se a idade da
pessoa é maior ou igual de 18 anos,
se for mostrar a mensagem "PODE DIRIGIR"
senão verificar se a idade é maior ou igual á
90 anos se for, mostar a mensagem "já paoou do tempo , não
pode mais dirigir, senão mostar "manor de idade"
 */

$idade = 15;

if ($idade >= 90) {
   echo "Já passou do tempo, não pode mais dirigir";
} else if ($idade >= 18) {
   echo "Pode Dirigir";
} else {
   echo "Maior de Idade";
}

echo  "<hr>";

/*PROBLEMA: verificar se a idade da pessoa é maior ou igual de 18 anos, se 
 for mostrar a mensagem "pode dirigir" senão mostrar "menor de idade" e a 
 quantidade de anos que falta para a pessoa ser maior de idade */


$idade = 10;
if ($idade >= 18) {
   echo "Pode Dirigir";
} else {
   $diferenca = 18 - $idade;
   echo "Maior de idade, volte em $diferenca anos";
}
echo "<hr>";

/*
PROBLEMA: crie um código que verifique a cor informada pelo usuário e
 gere um código hexadecimal para formatar a cor do texto. As cores 
 permitidas são: azul, vermelho e verde. Caso seja diferente, deixar 
 a letra preta;
*/

$corEscolhida = "verde";
$corHexa = "";

switch ($corEscolhida) {
   case "vermelho":
      $corHexa = "#ff0000";
      break;
   case "azul":
      $corHexa = "#0000ff";
      break;
   case "verde":
      $corHexa = "#00ff00";
      break;
   default:
      $corHexa = "#000000";
      break;
}

echo "<h1 style='color:$corHexa'> Daniel é  muito lindo</h1>";

echo "<hr>";

/*
PROBLEMA: exiba os números de 0 à 20
*/

$contador = 0;

while ($contador <= 20) {
   echo $contador . "<br>";
   //$contador = $contador + 1
   $contador++;
}

echo "<hr>";

/*
PROBLEMA: exiba os números de 10 à 0
*/

$contador = 10;
while ($contador >= 0) {
   echo "$contador <br>";
   $contador--;
}

echo "<hr>";

for($i = 0 ; $i <= 20; $i++){
   echo "$i <br>";

}

echo "<hr>";

 #### Array
 /*
$fruta01 = "🍓";
$fruta02 = "🍇";
$fruta03 = "🥥";
*/
/*
$fruta = array();
$frutas[0] = "🍓";
$frutas[1] = "🍇";
$frutas[2] = "🥥";
*/
$frutas = ["🍓",  "🍇",  "🥥"];
$frutas[3] = "🍍";
array_push($frutas, "🍒");

 //echo gettype($frutas);

 echo count($frutas);

echo "<h1>Salada de frutas</h1>";

$qtd = count($frutas);

$contador = 0;

while($contador < $qtd){
   echo "$contador";
   echo " fruta : $frutas[$contador]  <br>";
   $contador++;
}
echo "<hr>";

for($i = 0; $i <  count($frutas); $i++){
   echo $frutas[$i];
}
echo "<hr>";

$carros = [ "🚗",  "🚛",  "🚜", "🚔", "🚑",  "🚚"];
$carros[6] = "🚖";
array_push($carros, "🚒");


$qtd = count($carros);
$contador = 0;

echo "<h1>Carros do futuro</h1>";

while($contador < $qtd){
   echo "$contador";
   echo " carros : $carros[$contador]  <br>";
   $contador++;
}


















?>
