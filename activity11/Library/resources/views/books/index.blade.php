<div>
    <head>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div class="container my-5">
            <h1 class="text-center mb-4">All Books</h1>
            <a href="{{ route('books.create') }}" class="btn btn-success mb-4">Add New Book</a>

            <ul class="list-group">
                @foreach ($books as $book)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        <div>
                            <strong>{{ $book->title }}</strong> by {{ $book->author }} ({{ $book->published_date }})
                        </div>
                        <div class="d-flex">
                            <a href="{{ route('books.edit', $book->id) }}" class="btn btn-primary btn-sm me-2">Edit</a>
                            <form action="{{ route('books.destroy', $book->id) }}" method="POST" class="mb-0">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                            </form>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    </body>
</div>
