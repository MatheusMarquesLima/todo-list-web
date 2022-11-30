<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="{{ url('/css/style.css') }}" rel="stylesheet">
    <title>Inicio</title>
   
</head>
<body>
    <h1 class="title">Todas as suas Tarefas</h1>
    
    <h2 class="aviso">
        <x-aviso/>
    </h2>
    <a href="/criando" class=""><button type="button" class="criar">Criar Tarefa</button></a>
    
        <table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Tarefa</th>
      <th scope="col">Pendência</th>
      <th scope="col">Funções</th>
    </tr>
  </thead>
  @foreach($atividades as $atividade)
  <tbody>
    <tr>
        <td>{{$atividade->id}}</td>
        <td>{{$atividade->titulo}}</td>
                    @if ($atividade->feito)
                            <td><span class="badge badge-success"> Completa</span></td>
                        @else
                            <td><span class="badge badge-danger">Pendente</span> </td>
                    @endif<td>
            <a href="{{asset( '/' . $atividade->id . '/editando')}}"><button type="button" class="btn btn-outline-warning">Editar</button></a>
            <a href="{{asset( '/' . $atividade->id . '/concluindo')}}"><button type="button" class="btn btn-outline-success">Concluir</button></a>
            <a href="{{asset('/' . $atividade->id . '/apagando')}}"><button type="button" class="btn btn-outline-danger">Apagar</button></a>
        </td>
      
    </tr>
  
</tbody>

@endforeach
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
</body>
</html>