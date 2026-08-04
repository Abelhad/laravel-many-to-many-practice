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
        <a href="{{ route('teachers.create') }}" class="btn btn-primary">Add Teachers</a>
    </div>
    <h2>Teachers List</h2>
    <table class="table table-striped w-50">
        <tr style="text-align: center;">
            <th>id</th>
            <th>name</th>
            <th>students</th>
            <th>action</th>
        </tr>
        @foreach($teachers as $teacher)
            <tr style="text-align: center;">
                <td> {{ $teacher->id }} </td>
                <td> {{ $teacher->name }} </td>
                <td>
                    @if($teacher->students->isEmpty())
                        no students linked
                    @else
                        @foreach($teacher->students as $student)
                            {{ $student->name }} 
                        @endforeach
                    @endif
                </td>
                <td id="actions">
                    <a href="{{ route('teachers.edit', $teacher) }}" class="btn btn-warning">Modify</a>
                    <form action="{{ route('teachers.destroy', $teacher) }}" method="post">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
</body>
</html>