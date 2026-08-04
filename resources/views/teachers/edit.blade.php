<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('teachers.update', $teacher) }}" method="post">
        @csrf
        @method('PUT')
        <label for="">name</label>
        <input type="text" name="name" value="{{ $teacher->name }}">
        @if($students->isEmpty())
            <h3>no students exists</h3>
        @else
            @foreach($students as $student)
                <div>
                    <input type="checkbox"
                    name="students[]"
                    value="{{ $student->id }}"
                    {{ $teacher->students->contains($student->id) ? 'checked' : '' }}
                    >
                    {{ $student->name }}
                </div>
            @endforeach
        @endif
        <button type="submit">submit</button>
    </form>
</body>
</html>