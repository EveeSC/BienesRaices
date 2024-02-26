<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Principal</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div>
        <h1>Mantenimiento de Propiedades</h1>
    </div>

    <br>
    <br>
   <div>
        <table style="padding:=1">
            <thead>
               <th scope="row">Codigo Propiedad</th>
               <th scope="row">Color</th>
               <th scope="row">Metros</th>
               <th scope="row">Precio</th>
            </thead>
            <body>
                @foreach ($propiedades as $propiedad)
                    <tr>
                        <td>{{$propiedad->codigoPropiedad}}</td>
                        <td>{{$propiedad->color}}</td>
                        <td>{{$propiedad->metros}}</td>
                        <td>{{$propiedad->metros*$propiedad->costoxmtr}}</td>
                        <td>
                            <a href="{{route('propiedad.editar', $propiedad->codigoPropiedad)}}">Editar</a>
                        </td>
                        <td>
                            <a href="{{route('propiedad.eliminar', $propiedad->codigoPropiedad)}}">Eliminar</a>
                        </td>
                    </tr>
                @endforeach
            </body>
        </table>
   </div>
   <br>
   <br>
   <div>
    {{-- se agregara el nombre (name) de la ruta --}}
    <a href="{{route('propiedad.create')}}">
        <button type="button" class="btn btn-primary">Crear Nuevo</button>
    </a>
   </div>
</body>
</html>