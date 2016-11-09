<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Projects</title>
    </head>
    <body>
        <h1>All projects</h1>
        <ul>
            @foreach ($projects as $project)
                <li>{{ $project }} <form method="delete" action="/tasks/{{}}"</li>
            @endforeach
        </ul>
    </body>
</html>
