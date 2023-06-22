<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>example</title>
</head>
<body>
    <h4>Id Guru : {{ $guru2->id }}</h4>
    <h4>Nama Guru : {{ $guru2->name }}</h4>
    <h4>Umur Guru : {{ $guru2->age }}</h4>
    <h4>Murid yang diampu : </h4>
    @foreach($murid2 as $murid)
        <p>{{$murid->name}}</p>
    @endforeach
</body>
</html>
