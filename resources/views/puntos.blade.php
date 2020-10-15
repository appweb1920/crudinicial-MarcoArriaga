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
    <form action="/registroPunto" method="POST" class="w-75 p-3">
        @csrf
        <div class="row">
            <div class="col">
            <input type="text" class="form-control" placeholder="Tipo de basura"  name="tipo">
            </div>
            <div class="col">
            <input type="text" class="form-control" placeholder="Direccion" name="direccion">
            </div>
            <div class="col">
            <input type="text" class="form-control" placeholder="Hora apertura"  name="horaApertura">
            </div>
            <div class="col">
            <input type="text" class="form-control" placeholder="Hora Cierre" name="horaCierre">
            </div>
            <div class="col-auto">
                <button type="submit" class="btn btn-primary mb-2">Submit</button>
            </div>
        </div>
    </form>

    <table class="table table-hover" class="w-75 p-3">
        <thead class="thead-dark">
            <tr>
                <th>Tipo</th>
                <th>Dirección</th>
                <th>Hora Apertura</th>
                <th>Hora Cierre</th>
                <th>Relación</th>
                <th>Editar</th>
                <th>Borrar</th>
            </tr>
        </thead>
        <tbody>
        @if(!is_null($puntos))
            @foreach($puntos as $p)
                <tr>
                    <td><p>{{$p->tipo}}</p></td>
                    <td><p>{{$p->direccion}}</p></td>
                    <td><p>{{$p->horaApertura}}</p></td>
                    <td><p>{{$p->horaCierre}}</p></td>
                    <td><a class="btn btn-primary" href=""><i class="fas fa-book"></i></a></td>
                    <td><a class="btn btn-primary" href="/editarRecolector/{{$r->id}}"><i class="fas fa-edit"></i></a></td>
                    <td><a class="btn btn-primary" href="/borrar/{{$r->id}}"><i class="fas fa-trash-alt"></i></a></td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>


</body>
</html>