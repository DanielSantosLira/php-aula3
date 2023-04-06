<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRO DE CLIENTES</title>
</head>

<body>
    <h1>Cadastro de Clientes</h1>

    <form action="salvar.php" method="post">
        Nome:<input name="nome" maxlength="50" required /> <br><br>
        Sobrenome:<input type="sobrenome" name="sobrenome" required><br><br>
        Email:<input type="email"   name="email" value="@gmail.com" required/><br><br>
        Telefone:<input type="tel" maxlength="15" name="telefone" /><br><br>
        Cidade:<input name="cidade" maxlength="40" required/><br><br>
        Estado:
        <select id="estado" name="estado" required>
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
            <option value="EX">Estrangeiro</option>
        </select><br><br>
        <button type="submit">Salvar Cliente</button><br><br>
    </form>
    
    <?php
    $arquivo = fopen("clientes.csv", "r");

    //$conteudo =  fgets($arquivo,  filesize("clientes.csv"));
    
    //echo $conteudo;
     while(!feof($arquivo)){
        $linha = fgets($arquivo);
        
        $registro = explode(",", $linha);

       if($registro[0] != ""){
        echo $registro[0] . "--";
        echo $registro[1] . "--";
        echo $registro[2] . "--";
        echo $registro[3] . "--";
        echo $registro[4] . "<br>";
       }
    
        
     }
     fclose($arquivo);
    ?>





<script>
    <?php
    $msg = $_GET["mensagem"] ?? "";
    if($msg == "salvar"){
        echo "alert('Cliente salvo com sucesso!!!!')";
    }
    ?>
    </script>
   
</body>

</html>