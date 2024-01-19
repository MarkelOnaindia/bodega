<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet" integrity="sha384-
        1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous">
</head>
<body>
    <h1>Gestion de Bodegas:</h1>

    <button><a href="{{ route('bodegas.bodegaCreate') }}" class="btn btn-success">Añadir Bodega</a></button>
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
                            <a href="{{ route('bodegas.bodega', ['bodega' => $bodega->id]) }}" class="btn btn-info">Entrar</a>
                            <form action="{{ route('bodegas.destroy', ['bodega' => $bodega->id]) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger" onclick="return confirm('¿Estás seguro de eliminar esta bodega?')">Eliminar</button>
                            </form>
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

