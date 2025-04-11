<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Book</title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light d-flex justify-content-center align-items-center" style="height: 100vh;">

    <div class="container p-4 bg-white shadow rounded" style="max-width: 500px;">
        <!-- An unexamined life is not worth living. - Socrates -->
        <h1 class="text-center mb-4">This is Edit Page</h1>

        <!-- Form for editing a book -->
        <form action="{{ route('books.update', $book->id) }}" method="POST">
            @csrf
            @method('PUT')

            <!-- Title Input -->
            <div class="mb-3">
                <label for="title" class="form-label">Title:</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ $book->title }}" required>
            </div>

            <!-- Author Input -->
            <div class="mb-3">
                <label for="author" class="form-label">Author:</label>
                <input type="text" id="author" name="author" class="form-control" value="{{ $book->author }}" required>
            </div>

            <!-- Published Date Input -->
            <div class="mb-3">
                <label for="published_date" class="form-label">Published Date:</label>
                <input type="date" id="published_date" name="published_date" class="form-control" value="{{ $book->published_date }}" required>
            </div>

            <!-- Submit Button -->
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-success">Save Changes</button>
            </div>
        </form>
    </div>

    <!-- Bootstrap 5 JS Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

