<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1>Crear</h1>

    <a href="{{route('category.index')}}">Atrás</a>

    <form method="POST" action="{{route('category.store')}}">
        @csrf
        <input type="text" name="name">
        <input type="submit" value="create">

    </form>
</body>

</html>