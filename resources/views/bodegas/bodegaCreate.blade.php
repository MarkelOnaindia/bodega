<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Bodega</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container mt-4">
        <h1>Crear Bodega</h1>

        <form action="{{ route('bodegas.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>

            <div class="mb-3">
                <label for="direccion" class="form-label">Dirección</label>
                <input type="text" class="form-control" id="direccion" name="direccion">
            </div>

            <div class="mb-3">
                <label for="email" class="form-label">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>

            <div class="mb-3">
                <label for="telefono" class="form-label">Teléfono</label>
                <input type="text" class="form-control" id="telefono" name="telefono">
            </div>

            <div class="mb-3">
                <label for="contacto" class="form-label">Persona de contacto</label>
                <input type="text" class="form-control" id="contacto" name="contacto">
            </div>
            
            <div class="mb-3">
                <label for="fundacion" class="form-label">Año de fundacion</label>
                <input type="date" class="form-control" id="fundacion" name="fundacion">
            </div>

            <button type="submit" class="btn btn-info">Crear Bodega</button>
            <a class="btn btn-secondary" href="{{ route('bodegas.index') }}">Volver</a>

        </form>
    </div>
</body>
</html>