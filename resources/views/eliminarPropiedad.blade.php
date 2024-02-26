<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Eliminar</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h1>Eliminar Propiedad</h1>

    <table style="padding:=1">
        <thead>
           <th scope="row">Codigo Propiedad</th>
           <th scope="row">Color</th>
           <th scope="row">Metros</th>
           <th scope="row">Precio</th>
        </thead>
        <body>
                <tr>
                    <td>{{$propiedad->codigoPropiedad}}</td>
                    <td>{{$propiedad->color}}</td>
                    <td>{{$propiedad->metros}}</td>
                    <td>{{$propiedad->metros*$propiedad->costoxmtr}}</td>
                </tr>
        </body>
    </table>
    <div>
        <a href="{{route('propiedad.home')}}" class="btn btn-warning">
            Cancelar
        </a>
    </div>
    <div>
        <a href="{{route('propiedad.destroy', $propiedad->codigoPropiedad)}}" class="btn btn-danger">
            Eliminar
        </a>
    </div>
</body>
</html>