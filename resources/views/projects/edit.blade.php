<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Edit project</title>
    </head>
    <body>
        <h1>You're editing project {{ $task }}</h1>
        <form class="" action="index.html" method="post">
            <div class="">
                <label for="name">Field 1</label>
                <input type="text" name="name" value="">
            </div>
            <div class="">
                <label for="name">Field 2</label>
                <input type="text" name="name" value="">
            </div>
            <div class="">
                <label for="name">Field 3</label>
                <input type="text" name="name" value="">
            </div>
            <div class="">
                <label for="name">Field 4</label>
                <input type="text" name="name" value="{{ $task->name }}">
            </div>
            <button type="button" name="button">Edit</button>
        </form>
    </body>
</html>
