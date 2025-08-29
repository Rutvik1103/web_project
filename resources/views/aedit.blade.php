<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <form method="POST" action="{{route('abc.update', $product->id)}}">
      @csrf
      @method('PUT')
        <input type="text" name="name" placeholder="name" value="{{$product->name}}"><br>
        <input type="number" name="number" placeholder="mnumber" value="{{old('mnumber',$product->mnumber)}}"><br> 
        <button type="submit">update</button>


    </form>
    
</body>
</html>