<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="{{ route('teachers.create') }}">Add Teachers</a>
    <h2>Teachers List</h2>
    <table>
        <tr>
            <th>id</th>
            <th>name</th>
            <th>action</th>
        </tr>
        @foreach($teachers as $teacher)
            <tr>
                <td> {{ $teacher->id }} </td>
                <td> {{ $teacher->name }} </td>
                <td> -- </td>
            </tr>
        @endforeach
    </table>
</body>
</html>