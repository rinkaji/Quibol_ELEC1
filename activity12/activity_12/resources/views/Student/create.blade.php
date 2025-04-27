


    <h1>Add Student</h1>

    <form action="{{route('students.store')}}" method="post">
        @csrf
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
        <br>
        <label for="age">Age:</label>
        <input type="number" id="age" name="age" required>
        <br>
        <label for="grade">Grade:</label>
        <input type="number" id="grade" name="grade" required>
        <br>
        <button type="submit">Save</button>
    </form>

