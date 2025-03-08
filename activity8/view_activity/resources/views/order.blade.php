@extends ('master')

@section('meta')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
@endsection

@section('content')
    <p>Customer Id: {{$customerId}}<br> Order name: {{$orderName}} <br> Order number: {{$orderNo}} <br> Date: {{$date}}</p>
@endsection