<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form method="post" action="{{route('abc.store')}}">
        @csrf
        <input type="text" name="name" placeholder="name"><br>
        <input type="number" name="number" placeholder="mnumber"><br>
        <button type="submit">save</button>


    </form>
    <a href="{{route('abc.index')}}">show</a>
</body>
</html>