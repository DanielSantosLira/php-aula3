<?php

##Estrutura de Decisão
$usuario = "Daniel";
$senha = 128962;

if($usuario == "Daniel" && $senha == 128962){
    echo "Usuario  valido";
}else{
    echo "Usuario invalido";

}
echo "<hr>";

#### ESTRUTURA DE REPETIÇÃO & ARRAY
$produtos=["🚉", "🚟", "🦽", "🦽" , "🚊"];
echo $produtos[3];
echo $produtos[4];
echo "<hr>";
 $i = 0;

 while($i <= 3){
    echo $produtos[$i];
    $i++;
 }
 echo "<hr>";

?>


<form action="receba.php" method="post">
    <label for="">Nome:</label>
    <input type="text" name="nome" ><br><br>
    <label for="">E-mail:</label>
    <input type="text" name="email"><br><br>
    <label for="">Senha:</label>
    <input type="password" name="senha"><br><br>
    
    <button type="submit">Enviar</button>


</form>







