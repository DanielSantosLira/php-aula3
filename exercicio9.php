<?php
/* Problema: verificar se a idade da
pessoa é maior ou igual de 18 anos,
se for mostrar a mensagem "PODE DIRIGIR"
senão nãp mostar nada
 */

$idade = 20;
if($idade >= 18){
    echo "pode dirigir";
}
echo"<hr>";

/* Problema: verificar se a idade da
pessoa é maior ou igual de 18 anos,
se for mostrar a mensagem "PODE DIRIGIR"
senão não mostar mensagem "menor de idade"
 */
$idade = 15;

 if($idade >= 18){
    echo "pode dirigir";
 }else{
    echo "Menor de idade";
   
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

 if($idade >=90){
   echo "Já passou do tempo, não pode mais dirigir";

 }else if($idade >= 18){
   echo "Pode dirigir";
 }else{
    echo "Maior de idade";
 }

 echo  "<hr>";

 /* Problema: verificar se idade da pessoas 
  */
