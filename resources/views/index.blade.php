<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=5, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Crud Dasar</title>
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
    halaman saat ini : {{ $murid2->currentPage() }} <br>
    jumlah data : {{ $murid2->total() }} <br>
    data perpage : {{ $murid2->perPage() }} <br>

    {{ $murid2->links('pagination::bootstrap-4') }}
</body>
</html>
