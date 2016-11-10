<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Tasks</title>
    </head>
    <body>
        <h1>All tasks</h1>
        <ul>
            @foreach ($tasks as $task)
                <li>{{ $task->name }}</li>
            @endforeach
        </ul>
    </body>
</html>
