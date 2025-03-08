<html>
    <head>
        <title>View Student Records</title>
    </head>
    <body>
        <table border = 1>
            <tr>
                <td>ID</td>
                <td>Name</td>
            </tr>
            @foreach ($users as $user)
            <tr>
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td><a href="/edit/{{$user->id}}">Edit</a></td>
                <td><a href="/delete/{{$user->id}}">Delete</a></td>
            </tr>
            @endforeach
            
        </table>
        Add Users <a href="/insert">here</a>
    </body>
</html>