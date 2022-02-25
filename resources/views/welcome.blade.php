<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel 8 + Horizon</title>
</head>
<body>

    <form action="/cadastrar-usuario" method='POST'>
        @csrf
        <button type='submit'>Cadastrar</button>
    </form>

    <hr>

    <form action="/sumarizar-relatorios" method='POST'>
        @csrf
        <input type="text" name='nome' placeholder='Digite seu nome' />
        <button type='submit'>Solicitar sumarização dos Relatórios</button>
    </form>

</body>
</html>
