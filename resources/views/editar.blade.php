<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Editart</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <h1>Editar Propiedad</h1>
    <br>
    <br>
    <div>
        <label>Codigo Propiedad</label>
        {{-- //para acceder al valor --}}
        <input type="text" value="{{$propiedad->codigoPropiedad}}" readonly>
    </div>
    <form action="{{route('propiedad.actualizar', $propiedad->codigoPropiedad)}}" method="POST">
        @csrf
        @method('PUT')
        <div>
            <label>Color: </label>
            <input type="text" name="color" value="{{$propiedad->color}}">
        </div>
        <div>
            <label>Metros: </label>
            <input type="text" name="metros" value="{{$propiedad->metros}}">
        </div>
        <div>
            <label>Tipo de propiedad: </label>
            <input type="text" name="tipopropiedad" value="{{$propiedad->tipoPropiedad}}">
        </div>
        <div>
            <label>Costo por metros: </label>
            <input type="text" name="costoxmtr" value="{{$propiedad->costoxmtr}}">
        </div>
        <div>
            <label>Codigo Duenio: </label>
            <input type="text" name="codigoduenio" value="{{$propiedad->codigoDuenio}}">
        </div>
        <div>
            <label>Domicilio</label>
            <input type="text" name="domicilio" value="{{$propiedad->domicilio}}">
        </div>
        <br>
        <br>
        <div>
            <button type="submit" class="btn btn-secondary">Actualizar</button>
        </div>
    </form>
</body>
</html>