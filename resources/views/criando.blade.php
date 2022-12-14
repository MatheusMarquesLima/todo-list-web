<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="{{ url('/css/criando.css') }}" rel="stylesheet">
    <title>Criando</title>
</head>
<body>
    <h1 class="titulo">Crie uma tarefa</h1>
    <h2 class="aviso">
        <x-aviso/>
    </h2>
    <form action="/carregando" method="post">
        @csrf
        <input type="text" name="titulo" class="form-control" id="inputPassword2" placeholder="Nome da tarefa"> 
        <button type="submit" class="btn btn-primary" id="btn">Criar</button>
    </form>
    <a href="/inicio" ><button id="btn_inicio">Inicio</button></a>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

</body>
</html>