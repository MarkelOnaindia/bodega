<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Página Principal</title>
</head>
<body>
    <h1>Bodegas:</h1>

    @if(isset($bodegas) && count($bodegas) > 0)
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
                    <th>Fecha de Creación</th>
                    <th>Última Actualización</th>
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
                        <td>{{ $bodega->persona_contacto }}</td>
                        <td>{{ $bodega->fundacion }}</td>
                        <td>{{ $bodega->restaurante ? 'Sí' : 'No' }}</td>
                        <td>{{ $bodega->hotel ? 'Sí' : 'No' }}</td>
                        <td>{{ $bodega->created_at }}</td>
                        <td>{{ $bodega->updated_at }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <p>No hay bodegas disponibles.</p>
    @endif
</body>
</html>
