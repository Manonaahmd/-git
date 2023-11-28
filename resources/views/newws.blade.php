<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Product</h1>
    <div>
        @if(session()->has('success'))
            <div>
                {{session('success')}}
            </div>
        @endif
    </div>
    <div>
        <div>
            <a href="{{route('newws.create')}}">Create a newws</a>
        </div>
        <table border="1">
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>discription</th>
                <th>published</th>
                <th>author</th>
                <th>Edit</th>
                <th>Show</th>
                <th>Delete</th>
            </tr>
            @foreach($newws as $newws )
                <tr>
                    <td>{{$newws->id}}</td>
                    <td>{{$newws->Title}}</td>
                    <td>{{$newws->discription}}</td>
                    <td>{{$newws->published}}</td>
                    <td>{{$newws->author}}</td>
                    <td>
                       @if($newws->published)
                     Yes
                    @else
                       No
                     @endif
                    </td>
                    <td>
                        <a href="newwsDeails/{{ $newws->id }}">Show</a></td>

                     <td><a href="{{route('newws.edit', ['newws' => $newws])}}">Edit</a>
                    </td>

                    <td>
                        <form method="post" action="{{route('newws.destroy', ['newws' => $newws])}}">
                            @csrf 
                            @method('delete')
                            <input type="submit" value="Delete" />
                        </form>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
</body>
</html>
