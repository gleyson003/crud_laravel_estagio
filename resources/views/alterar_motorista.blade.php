<!DOCTYPE html>

<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crud Laravel</title>
</head>

<body>
    <form action="/motoristas/atualizar/{{ $motorista->id }}" method="PUT" >
        @csrf
        @method("PUT")
        <label for="">NOME</label>
        <input type="text" class="form-control" placeholder="Digite seu nome: " name="nome_do_motorista" value="{{ $motorista->nome }}">
        <br><br>
        <label for="">CPF</label>
        <input type="text" class="form-control" placeholder="Digite seu nome: " name="cpf" value="{{ $motorista->cpf }}">
        <br><br>
        <label for="">CNH</label>
        <input type="text" class="form-control" placeholder="Digite seu nome: " name="cnh" value="{{ $motorista->cnh }}">
        <br><br>
        <button class="btn btn-primary">Cadastrar</button>
    </form>

</body>

</html>
