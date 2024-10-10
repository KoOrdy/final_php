<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="table-responsive">


        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{url('users/update-post/' . $post->id)}}" method="post" enctype="multipart/form-data">

            @csrf

            @method('PUT')


            <input type="text" name="content" class="form-control" placeholder="Enter Title" value="{{old('content',$post->content)}}">
            <br>
            <input type="file" name="image" class="form-control">
            <br>
            <img src="{{asset('/storage/' . $post->image)}}" width="200" />
            <br>
            <br>
            <button class="btn btn-primary">
                Add
            </button> 

        </form>

    </div>
</body>
</html>





   

