<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar</title>
    <style>
    body{
        text-align: center;
    }
    h1{
        margin-top: 2em;
    }
    #area{
        width: 50%;
    }
    .col-xs-4{
        margin-left: 35%;
    }
    button{
        margin-top: 1em;
    }
</style>
</head>
<body>
    <h1>Editar Tarefa</h1>  
    <h3>
        <x-mensagem/>
    </h3>
    <form action="/atualizar" method="post">
        @csrf
        @method('patch')
        <div class="col-xs-4">
            <input type="text" name="nome" id="area" class="form-control " value="{{$tarefa->nome}}" aria-label="Recipient's username" aria-describedby="basic-addon1">
        </div>
        <input type="hidden" name="id" value="{{$tarefa->id}}"/>
        <button type="submit" class="btn btn-primary">Editar</button>
    
    <a href="/home"><button type="button" class="btn btn-success">Voltar</button></a>
    </form> <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>