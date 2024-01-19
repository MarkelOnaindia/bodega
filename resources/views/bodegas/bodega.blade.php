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
                    <th>Persona de Contacto</th>
                    <th>Fundación</th>
                    <th>Restaurante</th>
                    <th>Hotel</th>
            </tr>
        </thead>
        <tbody>
            @if(isset($bodega))
                <tr>
                <td>{{ $bodega->id }}</td>
                        <td>{{ $bodega->nombre }}</td>
                        <td>{{ $bodega->direccion }}</td>
                        <td>{{ $bodega->email }}</td>
                        <td>{{ $bodega->telefono }}</td>
                        <td>{{ $bodega->persona_contacto }}</td>
                        <td>{{ $bodega->fundacion }}</td>
                        <td>{{ $bodega->restaurante ? 'Sí' : 'No' }}</td>
                        <td>{{ $bodega->hotel ? 'Sí' : 'No' }}</td>
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
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay vinos disponibles en esta bodega.</p>
    @endif

    <button><a href="{{ route('bodegas.index') }}">Volver</a></button>

</body>
</html>
