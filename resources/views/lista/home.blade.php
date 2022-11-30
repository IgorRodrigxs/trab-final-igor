<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Home</title>
<style>
   
    .container-lg{
        margin-top: 3em;
        
    }
    th{
        text-align: center;
    }
    a{
        text-decoration: none;
    }
    .btn{
        display: flex;
        justify-content: center;
        gap: 10px;

    }
    #btn_add{
        margin-left:10em;        
    }
    .actions{
        width: 20%;
    }
    .status{
        width: 20%;
        
    }
    .tarefa{
        font-size: 1.5em;
    }

    </style>
</head>
<body>
    <div class="container-lg">
    <div class="table-responsive">
        <div class="table">
            <div class="table-title">
                <div class="row">
                    <div class="col-sm-8"><h2>Lista de <b>Tarefas</b></h2></div>
                    <div class="col-sm-4">
                    <a href="/criar"> <button id="btn_add" type="button" class="btn btn-info add-new"><i class="fa fa-plus"></i>Criar Tarefa</button></a>
                    </div>
                </div>
            </div>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Tarefa</th>
                        <th class="status">Status</th>                    
                        <th class="actions">Ações</th>   
                        
                    </tr>
                </thead>
                @foreach($tarefas as $tarefa)
                <tbody>
                    <tr>
                        <td class="tarefa">{{$tarefa->nome}}</td>
                        @if ($tarefa->status)
                            <td><span class="label label-success">&bull;</span> Completa</td>
                        @else
                            <td><span class="status text-danger">&bull;</span> Pendente</td>
                        @endif
                        <td class="btn">
                            <a href="{{asset('/' . $tarefa->id . '/completa')}}"><button type="button" class="btn btn-success">Feita</button></a>
                            <a href="{{asset('/' . $tarefa->id . '/editar')}}"><button type="button" class="btn btn-warning">Editar</button></a>
                            <a href="{{asset('/' . $tarefa->id . '/deletar')}}"><button type="button" class="btn btn-danger">Apagar</button></a>
                        </td>
                    </tr>
                
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>     



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>