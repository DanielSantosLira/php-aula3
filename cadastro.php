<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadstro de Clientes</title>
</head>
<body>
    <h1>Cadastro de Cliente</h1>

    <form action="salvar-cliente.php" method="post">
      Nome: <input type="text" name="nome"> <br><br>
      E-mail :<input type="text" name="email"><br><br>
      Telefone: <input type="number" name="tel"> <br><br>
      Rua: <input type="text" name="rua"><br><br>
      Número: <input type="number" name="numero"> <br><br>
      Bairro <input type="text" name="bairro"><br><br>
      Complemento: <input type="text" name="comple"> <br><br>
      Cidade: <input type="text" name="cid"><br><br>
      Estado:
      <select name="estado" id="">
        <option value="sp">SP</option>
        <option value="rj">RJ</option>
        <option value="mg">MG</option>
        <option value="al">AL</option>
      </select><br><br>
      Data de Nacimento <input type="number" name="dtn" ><br><br>
      CPF <input type="number" name="cpf"><br><br>
      RG <input type="number" name="rg"><br><br>
      Whatsapp :<input type="number" name="whats"><br><br>
      Babida:<input type="text" name="bebida"><br><br>
      <button type="submit">Enviar</button>
    
    
    </form>
    
</body>
</html>