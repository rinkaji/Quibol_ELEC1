<!DOCTYPE html>
<html>

<head>
    <title>Laravel Image Upload (Single + Multiple)</title>
</head>

<body>
    <h1>Single Image Upload</h1>
    <form action="{{ route('photos.store.single') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="image" required>
        <button type="submit">Upload</button>
    </form>

    <h1>Multiple Images Upload</h1>
    <form action="{{ route('photos.store.multiple') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="images[]" multiple required>
        <button type="submit">Upload</button>
    </form>

    @if(session('success'))
    <p style="color: green;">{{ session('success') }}</p>
    @endif

    <div style="display: flex; flex-wrap: wrap; align-content: center ">
        @foreach ($photos as $photo)
        <div style="display:flex; flex-direction:column; align-items: center">
            <div>
                <img src="{{asset('images/'. $photo->image)}}" alt="" srcset="" style="width:200px; height:300px">
            </div>
            <div>
                <form action="{{route('photo.delete',  $photo->id)}}" method="post">
                    @csrf
                    @method('Delete')
                    <button type="submit">delete</button>
                </form>

            </div>
        </div>
        @endforeach
    </div>
    <div>
        {{ $photos->links() }}
    </div>
</body>

</html>