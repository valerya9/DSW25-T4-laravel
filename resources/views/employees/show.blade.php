<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Vista de Empleado</h1>
    <h2>{{ $employee->id }}</h2>
    <h2>{{ $employee->name }}</h2>
    <h3>{{ $employee->salary }}€</h3>
    <p>
        <form action="/employees/{{ $employee->id }}" method="post">
            @csrf
            <input type="submit" value="Eliminar">
        </form>
    </p>
</body>
</html>