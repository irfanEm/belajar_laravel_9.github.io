<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filter</title>
</head>
<body>
    <h2>Data Siswa</h2>
    <table border="1">
        <thead>
            <th>#</th>
            <th>Nama</th>
            <th>Nilai</th>
        </thead>
        <tbody>
        @foreach($murid2 as $murid)
            <tr>
                <td>{{ $murid->id }}</td>
                <td>{{ $murid->name }}</td>
                <td>{{ $murid->score }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>
