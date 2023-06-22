<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Filter</title>
</head>
<body>
    <h2>Data Guru Filter</h2>
    <table border="1">
        <thead>
            <th>#</th>
            <th>Nama</th>
            <th>Umur</th>
        </thead>
        <tbody>
        @foreach($gurus as $guru)
            <tr>
                <td>{{ $guru->id }}</td>
                <td>{{ $guru->name }}</td>
                <td>{{ $guru->age }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
</body>
</html>
