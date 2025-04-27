@extends('layouts.app')

@section('content')
    <h1>QR Code for Student</h1>
    <!-- Display the generated QR code -->
    {!! $qr !!}
@endsection
