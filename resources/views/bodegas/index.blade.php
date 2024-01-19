<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
</head>
<body>
    <h1>Gestion de Bodegas:</h1>

    <button>Añadir Bodega</button>
    @if(isset($bodegas) && count($bodegas) > 0)
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Dirección</th>
                    <th>Email</th>
                    <th>Teléfono</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                @foreach($bodegas as $bodega)
                    <tr>
                        <td>{{ $bodega->id }}</td>
                        <td>{{ $bodega->nombre }}</td>
                        <td>{{ $bodega->direccion }}</td>
                        <td>{{ $bodega->email }}</td>
                        <td>{{ $bodega->telefono }}</td>
                        <td>
                            <a href="{{ route('bodegas.show', ['bodega' => $bodega->id]) }}"><button>Entrar</button></a>
                            <button>Eliminar</button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay bodegas disponibles.</p>
    @endif
</body>
</html>
