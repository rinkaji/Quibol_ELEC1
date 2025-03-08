<html>
    <head>
        <title>STUDENT MANAGEMENT | ADD</title>
    </head>
    <body>
        <form action="/create" method="post">
            <input type="hidden" name="_token" value="<?php echo csrf_token();?>">
            <table>
                <tr>
                    <td>Name</td>
                    <td><input type="text" name="stud_name" ></td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" value="Add Student">
                    </td>
                </tr>
            </table>
        </form>
        View Record <a href="/view-records">here</a>
    </body>
</html>