<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>example</title>
</head>
<body>
    <h4>Nama siswa : {{ $students->name }}</h4>
    <h4>Extra yang diikuti : </h4>
    @foreach($activities as $activity)
        <p>{{$activity->name}}</p>
    @endforeach
</body>
</html>
