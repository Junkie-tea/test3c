<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="card">
        <h2>{{ $question->name }}</h2>
        <p>{{ $question->text }}</p>
        <p>{{ $question->created_at }}</p>
        <p><a href="{{route("/")}}">Вернуться</a></p>
    </div>
</body>
</html>
