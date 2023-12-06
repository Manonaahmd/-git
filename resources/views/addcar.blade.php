<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Car</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
    <h2>Add Car</h2>
    <form action="{{route('storeCar')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="title">Title:</label>
            <input type="text" class="form-control" id="title" placeholder="Enter title" name="carTitle" value="{{ old('carTitle') }}">
            @error('carTitle')
            <div class="alert alert-warning">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="form-group">
            <label for="price">Price:</label>
            <input type="number" class="form-control" id="price" placeholder="Enter Price" name="price" value="{{ old('price') }}">
        </div>
        <div class="form-group">
            <label for="description">Description:</label>
            <textarea class="form-control" rows="5" id="description" name="description">{{ old('description') }}</textarea>
            @error('description')
                {{ $message }}
            @enderror
            <div id="image" class="row" style="display: none;">
                        <div class="col-md-12">
                            <label for="text">Project Image</label>
                            <div class="form-group">
                                <input type="file" class="form-control" name="project_image"
                                value="{{ old('project_image',$currentProject->project_image) }}">
                                @if ($errors->has('description'))
                                <div class="text-danger">{{ $errors->first('description') }}</div>
                                @endif
                            </div>
                        </div>
                    </div>     
  </div>
  </div>
  </div>

<div class="form-group">
    <label class="col-md-4 control-label">Current Image </label>
    <div class="col-md-5 inputGroupContainer">
    <img src="{{ URL::to($StudentData->pro_pic)}}" height="150px" width="190px">
    <input type="hidden" name="Prev_pic" value="{{$StudentData->pro_pic}}">
    </div>
</div>
            @error('image')
                {{ $message }}
            @enderror
        </div>
        <div class="checkbox">
            <label><input type="checkbox" name="published"> Published</label>
        </div>
        <button type="submit" class="btn btn-default">Add</button>
    </form>
</div>

</body>
</html>