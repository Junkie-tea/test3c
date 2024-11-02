<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <section class="form">
        <form action="{{ route('questions.create') }}" method="POST">
            @csrf
            <p><input type="text" name="name" placeholder="Name" required></p>
            <p><input type="text" name="text" placeholder="Text" required></p>
            <p><button type="submit">Create</button></p>
        </form>
    </section>
    <section class="cards">
        @foreach ($questions as $question)
            <div class="card">
                <h2>{{ $question->name }}</h2>
                <p>{{ $question->text }}</p>
                <p>{{ $question->created_at }}</p>
                <p><a href="{{route('answers.show', $question->id)}}">Подробнее</a></p>
            </div>
        @endforeach
    </section>
</body>
</html>
