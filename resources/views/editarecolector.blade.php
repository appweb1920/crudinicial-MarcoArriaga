<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>
    <h1 class="display-1">Editando datos...</h1>

    <form action="update" method="POST" class="w-75 p-3">
        @csrf
        <div class="row">
            <input type="hidden" name="id" value="{{$recolector->id}}">
            <div class="col">
                Nombre:<input type="text" class="form-control" value="{{$recolector->nombre}}" name="nombre">
            </div>
            <div class="col">
                Dias:<input type="text" class="form-control" value="{{$recolector->dias}}" name="dias">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </div>
        </div>
    </form>
    
</body>
</html>