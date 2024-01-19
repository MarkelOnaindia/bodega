<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bodega</title>
</head>
<body>
    <h1>Datos Bodega</h1>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Dirección</th>
                <th>Email</th>
                <th>Teléfono</th>
                <!-- Añade más columnas según tus campos -->
            </tr>
        </thead>
        <tbody>
            @if(isset($bodega))
                <tr>
                    <td>{{ isset($bodega->id) ? $bodega->id : '' }}</td>
                    <td>{{ isset($bodega->nombre) ? $bodega->nombre : '' }}</td>
                    <td>{{ isset($bodega->direccion) ? $bodega->direccion : '' }}</td>
                    <td>{{ isset($bodega->email) ? $bodega->email : '' }}</td>
                    <td>{{ isset($bodega->telefono) ? $bodega->telefono : '' }}</td>
                    <!-- Añade más filas según tus campos -->
                </tr>
            @else
                <tr>
                    <td colspan="5">Bodega no encontrada</td>
                </tr>
            @endif
        </tbody>
    </table>

    <h2>Vinos disponibles:</h2>

@if(isset($bodega) && $bodega->vinos->count() > 0)
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Descripción</th>
                <th>Año</th>
                <th>Alcohol</th>
                <th>Tipo</th>
                <!-- Añade más columnas según tus campos de vino -->
            </tr>
        </thead>
        <tbody>
            @foreach($bodega->vinos as $vino)
                <tr>
                    <td>{{ isset($vino->id) ? $vino->id : '' }}</td>
                    <td>{{ isset($vino->nombre) ? $vino->nombre : '' }}</td>
                    <td>{{ isset($vino->descripcion) ? $vino->descripcion : '' }}</td>
                    <td>{{ isset($vino->anio) ? $vino->anio : '' }}</td>
                    <td>{{ isset($vino->alcohol) ? $vino->alcohol : '' }}</td>
                    <td>{{ isset($vino->tipo) ? $vino->tipo : '' }}</td>
                    <!-- Añade más filas según tus campos de vino -->
                </tr>
            @endforeach
        </tbody>
    </table>
@else
    <p>No hay vinos disponibles en esta bodega.</p>
@endif


</body>
</html>
