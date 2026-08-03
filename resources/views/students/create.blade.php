<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="{{ route('students.store') }}" method="post">
        @csrf
        <label for="">name</label>
        <input type="text" name="name">
        @if($teachers->isEmpty())
            <h3>no teachers yet</h3>
        @else
            @foreach($teachers as $teacher)
                <div>
                    <input type="checkbox"
                    name="teachers[]"
                    value="{{ $teacher->id }}"
                    >
                    {{ $teacher->name }}
                </div>
            @endforeach
        @endif
        <button type="submit">submit</button>
    </form>
</body>
</html>