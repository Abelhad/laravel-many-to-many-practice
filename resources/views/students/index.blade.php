<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>
<body>
    <div>
        <a href="{{ route('students.create') }}" class="btn btn-primary">Add Student</a>
    </div>
    <h2>Students Liste</h2>
    <table class="table table-striped w-50">
        <tr style="text-align: center;">
            <th>id</th>
            <th>name</th>
            <th>teachers</th>
            <th>action</th>
        </tr>
        @foreach($students as $student)
            <tr style="text-align: center;">
                <td> {{ $student->id }} </td>
                <td> {{ $student->name }} </td>
                <td>
                    @if($student->teachers->isEmpty())
                        no teachers linked
                    @else
                        @foreach($student->teachers as $teacher)
                            {{ $teacher->name }}
                        @endforeach
                    @endif
                </td>
                <td id="actions">
                    <a href="{{ route('students.edit', $student) }}" class="btn btn-warning">Modify</a>
                    
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>