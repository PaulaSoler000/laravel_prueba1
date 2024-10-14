<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Productos</h1>

    <form method="POST" action="{{ route('products.store') }}">
        @csrf
        <label for="">Nombre: </label>
        <input type="text" name="name"><br>

        <label for="">Descripcion: </label>
        <input type="text" name="description"><br>

        <label for="">Precio: </label>
        <input type="text" name="price"><br>

        <input type="submit" value="crear">

    </form>

    <table>
        <tr>
            <th>nombre</th>
            <th>descripcion</th>
            <th>precio</th>
            <th>botones</th>
        </tr>
        @foreach ($products as $product)
            <tr>
                <td> {{ $product->name }}</td>
                <td> {{ $product->description }}</td>
                <td> {{ $product->price }}</td>
                <td>
                    <form action="{{ route('products.destroy', $product->id) }}" method="POST">
                        @method('DELETE')
                        @csrf
                        <input type="submit" value="delete">
                        <a href="{{ route('products.edit', $product->id) }}"><input type="button" value="edit"></a>
                    </form>
                </td>
            </tr>
        @endforeach

    </table>

</body>

</html>
