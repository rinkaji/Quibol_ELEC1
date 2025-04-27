@extends('layouts.app')

@section('content')
    <h1>All Students</h1>
    <ul>
        @foreach($students as $student)
        <li>
            Name: {{$student->name}}  
            Age: {{$student->age}} 
            Grade: {{$student->grade}}

            <a href="{{route('students.showQrCode', $student->id)}}">qr code</a>

            <a href="{{route('students.show', $student->id)}}">show</a>

            <a href="{{route('students.edit', $student->id)}}">edit</a>

            <form action="{{route('students.destroy', $student)}}" method="post">
                @csrf
                @method('DELETE')
                <button type="submit">delete</button>
            </form>
        </li>
        @endforeach
    </ul>
@endsection