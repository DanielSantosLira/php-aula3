<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=h1, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Cadastro de Cliente</title>
</head>

<body>
    <div class="container mt-3 bg-info p-2">
        <h1>Cadastro de clientes</h1>
        <form action="salvar.php" method="post" class="form-group text-white">
            Nome:<input name="nome" required><br><br>
            Cidade:<input name="cidade" required><br><br>
            Telefone: <input type="tel"  name="telefone" required><br><br>
            E-mail: <input name="email" type="text" required><br><br>

            <button type="submit" class="btn btn-primary">Salvar</button>




        </form>
    </div>]
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</html>