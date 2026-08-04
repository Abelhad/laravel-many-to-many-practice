<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('students.update', $student) }}" method="post">
        @csrf
        @method('PUT')
        <label for="">name</label>
        <input type="text" name="name" value="{{ $student->name }}">
        @if($teachers->isEmpty())
            <div>zero teachers exist now</div>
        @else
            @foreach($teachers as $teacher)
                <div>
                    <input type="checkbox"
                    name="teachers[]"
                    value="{{ $teacher->id }}"
                    {{ $student->teachers->contains($teacher->id) ? 'checked' : '' }}
                    >
                    {{ $teacher->name }}
                </div>
            @endforeach
        @endif
        <button type="submit">submit</button>
    </form>
</body>
</html>