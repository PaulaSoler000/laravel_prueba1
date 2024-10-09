<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/app.css">
    <title>Document</title>
</head>

<body>
    <h1>Lista</h1>
    <!--<a href="{{route('category.index')}}">Atrás</a>-->
    <!--<ul>
        @foreach ($categories as $category)
            <li>{{$category->name}}</li>
        @endforeach
    </ul>-->

    <form method="POST" action="{{route('category.store')}}">
        @csrf
        <input type="text" name="name">
        <input type="submit" value="create">

    </form>

    <ul>
        @foreach ($categories as $category)
            <input type="checkbox" id="" value="" />
            <label for="">{{$category->name}}</label><br>
        @endforeach
    </ul>


</body>

</html>