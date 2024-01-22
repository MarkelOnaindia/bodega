<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crear Nuevo Vino</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <h1>Crear Nuevo Vino</h1>

       <form action="{{ route('vinos.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="nombre" class="form-label">Nombre del Vino</label>
                <input type="text" class="form-control" id="nombre" name="nombre" required>
            </div>

            <div class="mb-3">
                <label for="descripcion" class="form-label">Descripción</label>
                <textarea class="form-control" id="descripcion" name="descripcion" rows="3" required></textarea>
            </div>

            <div class="mb-3">
                <label for="anio" class="form-label">Año</label>
                <input type="number" class="form-control" id="anio" name="anio" required>
            </div>

            <div class="mb-3">
                <label for="alcohol" class="form-label">Contenido de Alcohol (%)</label>
                <input type="number" class="form-control" id="alcohol" name="alcohol" step="0.1" required>
            </div>

            <div class="mb-3">
                <label for="tipo" class="form-label">Tipo</label>
                <input type="text" class="form-control" id="tipo" name="tipo" required>
            </div>

            <input type="hidden" name="id_bodega" value="{{ $bodega->id }}">

            <button type="submit" class="btn btn-primary">Guardar Vino</button>
        </form>

        <a href="{{ route('bodegas.bodega', ['bodega' => $bodega->id]) }}" class="btn btn-secondary">Volver</a>
    </div>

</body>
</html>
