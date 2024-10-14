<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Productos</h1>

    <form method="POST" action="{{route('products.store')}}">
        @csrf
        <input type="text" name="name">
        <input type="text" name="description">
        <input type="text" name="price">
        <input type="submit" value="create">

    </form>
    <ul>
        @foreach ($products as $product)
            <li>
                {{$product->name}}
                {{$product->description}}
                {{$product->price}}
                <form action="{{route('products.destroy', $product->id)}}" method="POST">
                    @method('DELETE')
                    @csrf
                    <input type="submit" value="delete">
                    <a href="{{route('products.edit', $product->id)}}"><input type="button" value="edit"></a>
                </form>
            </li>

        @endforeach
    </ul>

</body>

</html>