<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Create a Product</h1>
    <div>
        @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>


        @endif
    </div>
    <form method="post" action="{{route('newws')}}">
        @csrf 
        @method('post')
        <div>
            <label>itle</label>
            <input type="text" name="itle" placeholder="itle" />
        </div>
        <div>
            <label>description</label>
            <input type="text" name="description" placeholder="description" />
        </div>
        <div>
            <label>published</label>
            <input type="text" name="published" placeholder="published" />
        </div>
        <div>
            <label>author</label>
            <input type="text" name="author" placeholder="author" />
        </div>
        <div>
            <label>notes</label>
            <input type="text" name="notes" placeholder="notes" />
        </div>
        <div>
            <input type="submit" value="Save a Newws" />
        </div>
    </form>
</body>
</html>