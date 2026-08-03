<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('teachers.store') }}" method="post">
        @csrf
        <label for="">name</label>
        <input type="text" name="name">
        @if($students->isEmpty())
            <h3>no students yet</h3>
        @else
            @foreach($students as $student)
                <div>
                    <input type="checkbox"
                    name="students[]"
                    value="{{ $student->id }}"
                    >
                    {{ $student->name }}
                </div>
            @endforeach
        @endif
        <button type="submit">submit</button>
    </form>
</body>
</html>