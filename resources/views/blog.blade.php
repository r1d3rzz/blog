<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="/css/app.css">
    <title>blog</title>
</head>
<body>

    <h1>{{$blog->title}}</h1>

    <span>{{$blog->date}}</span>

    <p>{!!$blog->body!!}</p>

    <p><a href="/">back to home</a></p>
</body>
</html>
