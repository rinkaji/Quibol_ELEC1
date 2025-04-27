@extends('layouts.app')

@section('content')
    <h1>This is the Student</h1>
    Name: {{$student->name}} <br>
    Age: {{$student->age}} <br>
    Grade: {{$student->grade}}
@endsection