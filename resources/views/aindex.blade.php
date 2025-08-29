<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <table>
        <tr>
            <th>Id:</th>
            <th>Name:</th>
            <th>Mnumber:</th>
            <th>action</th>
        </tr>
     @forelse ($product as $pro )
        <tr>
              <td>{{$pro->id}}</td>
            <td>{{$pro->name}}</td>
            <td>{{$pro->mnumber}}</td>
            <td> <a href="{{route('abc.edit',$pro->id)}}">edit</a></td>
            <td>
                <form method="POST" action="{{route('abc.destroy',$pro->id)}}">
                    @csrf
                    @method('DELETE')
                    <button type="submit">DELETE</button>
                </form>
            </td>
        </tr>
         
     @empty
         
     @endforelse
    </table>
    
</body>
</html>