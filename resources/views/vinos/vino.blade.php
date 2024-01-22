<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vino</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <h1>Detalle de Vino</h1>

    <form action="{{ route('vinos.update', ['vino' => $vino->id]) }}" method="POST">
        @csrf
        @method('PUT')

        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Descripción</th>
                    <th>Año</th>
                    <th>Alcohol</th>
                    <th>Tipo</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{ $vino->id }}</td>
                    <td>
                        <input type="text" name="nombre" class="form-control" value="{{ $vino->nombre }}">
                    </td>
                    <td>
                        <input type="text" name="descripcion" class="form-control" value="{{ $vino->descripcion }}">
                    </td>
                    <td>
                        <input type="text" name="anio" class="form-control" value="{{ $vino->anio }}">
                    </td>
                    <td>
                        <input type="text" name="alcohol" class="form-control" value="{{ $vino->alcohol }}">
                    </td>
                    <td>
                        <input type="text" name="tipo" class="form-control" value="{{ $vino->tipo }}">
                    </td>
                    <td>
                        <button type="submit" class="btn btn-success">Guardar</button>

                        <a href="{{ route('bodegas.bodega', ['bodega' => $vino->id_bodega]) }}" class="btn btn-secondary">Volver</a>
                    </td>
                </tr>
            </tbody>
        </table>
    </form>

</body>
</html>
