@extends ('master')

@section('meta')
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
@endsection

@section('content')
    <p>I am the customer number {{$id}} <br> My name is {{$name}} <br> I live at {{$address}}</p>
@endsection