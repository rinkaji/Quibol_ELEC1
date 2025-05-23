<!DOCTYPE html>
<html>

<head>
    <style>
        .container {
            display: flex;
            justify-content: space-around;
            margin: 20px;
        }

        .column {
            border: 1px solid #ccc;
            padding: 20px;
            width: 30%;
            text-align: center;
            background-color: #f9f9f9;
        }

        .column h3 {
            margin-bottom: 15px;
        }
    </style>
</head>

<body>
    <h2 style="text-align:center;">Animal Taxonomy Info</h2>
    <div class="container">
        @foreach ($results as $animal)
        <div class="column">
            <h3>{{ $animal['name'] }}</h3>
            @if (isset($animal['error']))
            <p>{{ $animal['error'] }}</p>
            @else
            <p><strong>Kingdom:</strong> {{ $animal['kingdom'] }}</p>
            <p><strong>Family:</strong> {{ $animal['family'] }}</p>
            <p><strong>Order:</strong> {{ $animal['order'] }}</p>
            @endif
        </div>
        @endforeach
    </div>
</body>

</html>