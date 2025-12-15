<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Crear una Tarea</h1>
    <form action="{{ Route('tasks.store') }}" method="post">
        @csrf
        <p>
            <input type="text" name="title" id="title" placeholder="Escribe el titulo...">
        </p>
        <p>
            <input type="number" name="priority" id="priority" placeholder="Escribe la prioridad...">
        </p>
        <p>
            <input type="submit" value="Crear">
        </p>
</body>
</html>