<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
    <title>Crud Laravel</title>
</head>

<body>
    <div class="mb-3 form-group">
    <form action="/cadastro" method="POST" >
        @csrf
        @method("POST")
        <label for="">NOME:</label>
        <input type="text" class="form-control" placeholder="Digite seu nome " name="nome_do_motorista"><br><br>
        <label for="">CPF:</label>
        <input type="text" class="form-control" placeholder="Digite seu CPF " name="cpf"><br><br>
        <label for="">CNH:</label>
        <input type="text" class="form-control" placeholder="Número da sua CNH " name="cnh"><br><br>
        <button class="btn btn-primary">Cadastrar</button>
    </form>
    </div>
</body>

</html>
