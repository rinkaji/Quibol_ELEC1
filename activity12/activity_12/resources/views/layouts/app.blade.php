
<!DOCTYPE html>
<html>
<head>
    <title>QR Code CRUD</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-4">
    <a href="{{route('students.create')}}">Add Student</a>
    <a href="{{route('students.index')}}">Students</a>
    @yield('content')
</div>
</body>
</html>
