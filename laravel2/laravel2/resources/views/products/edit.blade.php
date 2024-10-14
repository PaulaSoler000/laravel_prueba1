<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Edit product: {{$product->name}}</h1>
    <form action="{{route('products.update', $product->id)}}" method="POST">
        @method('PUT')
        @csrf
        <input type="text" name="name" value="{{$product->name}}">
        <input type="submit" value="update">
    </form>
</body>

</html>