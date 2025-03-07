@extends ('master')

@section('meta')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
@endsection

@section('content')
    <p>Transaction Number: {{$transNo}}<br> Order Number: {{$orderNo}} <br> Item: {{$item}} <br> Id: {{$id}} <br> Name: {{$name}} <br> Price: {{$price}} <br> Quantity: {{$qty}}</p>
@endsection