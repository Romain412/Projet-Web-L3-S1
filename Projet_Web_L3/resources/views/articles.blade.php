<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mes articles</title>
</head>
<body>
    <h1>Mes articles</h1>
    <ul>
        @foreach($articles as $article)
        <li><a href="{{$article->id}}"> {{$article['titre']}}</a><br>
        {{$article['contenu']}}
        </li><br>
        @endforeach
    </ul>
</body>
</html>