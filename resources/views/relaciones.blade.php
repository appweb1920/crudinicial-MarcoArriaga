<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recolectores</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>
<body>

    <h1 class="display-1">Recolectores</h1>
    <a class="btn btn-primary my-1" href="/recolectores">Nuevo recolector</a>
    <a class="btn btn-primary my-1" href="/puntos">Volver</a>

    <table class="table table-hover" class="w-75 p-3">
        <thead class="thead-dark">
            <tr>
                <th>Nombre</th>
                <th class="col-sm-3">Dias</th>
                <th>Borrar</th>
            </tr>
        </thead>
        <tbody>
        @if(!is_null($relaciones))
            @foreach($relaciones as $r)
                <tr>
                    <td><p>{{$r->nombre}}</p></td>
                    <td><p>{{$r->dias}}</p></td>
                    <td><a class="btn btn-primary" href="/borrar-rel/{{$r->id}}"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>

    <form action="/nuevoRecolector" method="POST" class="w-75 p-3">
        @csrf
        <input type="hidden" name="id" value="{{$id}}">
        <div class="form-row align-items-center">
            <div class="col-auto my-1">
                <select class="custom-select mr-sm-2" name="id_recolector">
                    @if(!is_null($recolectores))
                        @foreach($recolectores as $r)
                            <option value="{{$r->id}}">{{$r->nombre}}</option>
                        @endforeach
                    @endif
                </select>
            </div>
            <div class="col-auto my-1">
                <button type="submit" class="btn btn-primary">Añadir</button>
            </div>
        </div>
    </form>
</body>
</html>