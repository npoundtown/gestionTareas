<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Nueva Tarea</title>
    <!-- Agregar enlaces a los archivos CSS de Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Agregar Nueva Tarea</h1>
        <form action="procesar_agregar.php" method="POST">
            <div class="form-group">
                <label for="tarea">Tarea:</label>
                <input type="text" class="form-control" id="tarea" name="tarea" required>
            </div>
            <button type="submit" class="btn btn-primary">Agregar Tarea</button>
        </form>
        <a href="index.php" class="btn btn-secondary mt-3">Volver a la Lista de Tareas</a>
    </div>
    <!-- Agregar enlaces a los archivos JavaScript de Bootstrap (jQuery y Popper.js) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
