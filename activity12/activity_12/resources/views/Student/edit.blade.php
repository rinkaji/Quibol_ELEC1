@extends('layouts.app')

@section('content')
    <h1>Edit Student</h1>
    <form action="{{route('students.update', $studentInfo->id)}}" method="post">
        @csrf
        @method("PUT")
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" value="{{$studentInfo->name}}"  required>
        <br>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" value="{{$studentInfo->age}}" required>
        <br>
        <label for="grade">Grade:</label>
        <input type="number" id="grade" name="grade" value="{{$studentInfo->grade}}" required>
        <br>
        <button type="submit">Save</button>
    </form>
@endsection