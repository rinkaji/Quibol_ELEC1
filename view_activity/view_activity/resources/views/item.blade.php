@extends ('master')

@section('meta')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
@endsection

@section('content')
    <p>Item number: {{$itemNo}} <br> Name: {{$itemName}} <br> Price: {{$price}}</p>
@endsection