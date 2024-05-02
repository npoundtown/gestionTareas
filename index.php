<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Tareas</title>
    <!-- Agregar enlaces a los archivos CSS de Bootstrap -->
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <h1>Lista de Tareas</h1>
        <div class="row">
            <div class="col-md-6">
                <h2>Tareas Pendientes</h2>
                <ul class="list-group">
                    <?php
                    // Cargar tareas pendientes desde el archivo de texto
                    $tareas_pendientes = file('tareas_pendientes.txt', FILE_IGNORE_NEW_LINES);
                    
                    // Mostrar tareas pendientes
                    foreach ($tareas_pendientes as $tarea) {
                        echo "<li class='list-group-item'>$tarea</li>";
                    }
                    ?>
                </ul>
            </div>
            <div class="col-md-6">
                <h2>Tareas Completadas</h2>
                <ul class="list-group">
                    <?php
                    // Cargar tareas completadas desde el archivo de texto
                    $tareas_completadas = file('tareas_completadas.txt', FILE_IGNORE_NEW_LINES);
                    
                    // Mostrar tareas completadas
                    foreach ($tareas_completadas as $tarea) {
                        echo "<li class='list-group-item'>$tarea</li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
        <div class="row mt-3">
            <div class="col-md-6">
                <a href="agregar.php" class="btn btn-primary">Agregar Nueva Tarea</a>
            </div>
            <div class="col-md-6">
                <a href="completar.php" class="btn btn-success">Marcar Tarea como Completada</a>
            </div>
        </div>
    </div>
    <!-- Agregar enlaces a los archivos JavaScript de Bootstrap (jQuery y Popper.js) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
