<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recolectores</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark sticky-top">
    <!-- Brand/logo -->
    <a class="navbar-brand" href="">Basura</a>
    <!-- Links -->
    <ul class="navbar-nav">
        <li class="nav-item">
        <a class="nav-link" href="\puntos">Puntos</a>
        </li>
        <li class="nav-item">
        <a class="nav-link" href="\recolectores">Recolectores</a>
        </li>
    </ul>
    </nav>

    <h1 class="display-3">Recolectores</h1>
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif

    @can('isAdmin')
        <form action="/registroRecolector" method="POST" class="w-75 p-3">
            @csrf
            <div class="row">
                <div class="col">
                <input type="text" class="form-control" placeholder="Nombre"  name="nombre">
                </div>
                <div class="col">
                <input type="text" class="form-control" placeholder="Dias" name="dias">
                </div>
                <div class="col-auto">
                    <button type="submit" class="btn btn-primary mb-2">Submit</button>
                </div>
            </div>
        </form>
    @endcan
    <table class="table table-hover table-bordered w-75 text-center mx-2">
        <thead class="thead-dark">
            <tr>
                <th>Nombre</th>
                <th>Dias</th>
                <th>Puntos</th>
                @can('isAdmin')
                    <th>Editar</th>
                    <th>Borrar</th>
                @endcan 
            </tr>
        </thead>
        <tbody>
        @if(!is_null($recolectores))
            @foreach($recolectores as $r)
                <tr>
                    <td><p>{{$r->nombre}}</p></td>
                    <td><p>{{$r->dias}}</p></td>
                    <td><a class="btn btn-primary" href="/relacion/{{$r->id}}"><i class="fas fa-book"></i></a></td>
                    @can('isAdmin')
                        <td><a class="btn btn-primary" href="/editarRecolector/{{$r->id}}"><i class="fas fa-edit"></i></a></td>
                        <td><a class="btn btn-primary" href="/borrar/{{$r->id}}"><i class="fas fa-trash-alt"></i></a></td>
                    @endcan
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>


</body>
</html>