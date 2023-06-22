<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <title>example</title>
</head>
<body>
    <h3>Tambah data Siswa</h3>
    <form action="{{ route('simpan_siswa') }}" method="post">
        @csrf
        <input type="text" name="nama" id="nama" placeholder="nama">
        <br><br>
        <input type="text" name="nilai" id="nilai" placeholder="nilai">
        <br><br>
        <input type="submit" value="simpan">
    </form>
</body>
</html>
