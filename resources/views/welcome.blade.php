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
    <table>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>CPF</th>
            <th>CNH</th>
            <th>Editar</th>
            <th>Excluir</th>
        </tr>
        <tr>
            @foreach($motoristas as $motorista)
            <td>{{$motorista->id}}</td>
            <td>{{$motorista->nome}}</td>
            <td>{{$motorista->cpf}}</td>
            <td>{{$motorista->cnh}}</td>
            <td><a class="btn btn-primary" href="/motoristas/alterar/{{ $motorista->id }}">Editar</a></td>
            <td><a class="btn btn-primary" href="/motoristas/excluir/{{ $motorista->id }}">Excluir</a></td>
        </tr>
        @endforeach
</table>
<td><a class="btn btn-primary" href="/motoristas/cadastro">Cadastrar</a></td>
</body>

</html>
