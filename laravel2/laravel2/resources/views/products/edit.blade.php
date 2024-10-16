<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Edit product: {{ $product->name }}</h1>
    <form action="{{ route('products.update', $product->id) }}" method="POST">
        @method('PUT')
        @csrf
        <label for="">Nombre: </label>
        <input type="text" name="name" value="{{ $product->name }}"><br>

        <label for="">Descripcion: </label>
        <input type="text" name="description" value="{{ $product->description }}"><br>

        <label for="">Precio: </label>
        <input type="text" name="price" value="{{ $product->price }}"><br>

        <input type="submit" value="update">
    </form>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>

</html>