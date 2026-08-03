<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('students.create') }}">Add Student</a>
    <h2>Students Liste</h2>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>action</th>
        </tr>
        @foreach($students as $student)
            <tr>
                <td> {{ $student->id }} </td>
                <td> {{ $student->name }} </td>
                <td> -- </td>
            </tr>
        @endforeach
    </table>
</body>
</html>