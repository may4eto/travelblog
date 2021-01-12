<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Messaggio ricevuto</title>
    <style>
        blockquote {
            margin-bottom: 16px;
        }
    </style>
</head>
<body>
    <p>Nuovo messaggio da: <br>{{$contact['name']}} {{$contact['surname']}}<br>{{$contact['email']}}</p>
    <p><blockquote>{{$contact['message']}}</blockquote></p>
    <p><small>Questo messaggio è stato inviato tramite il sito TravelBlog.</small></p>
</body>
</html>