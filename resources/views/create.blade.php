<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>example</title>
</head>
<body>
    <h3>Tambah data Guru</h3>
    <form action="{{ route('simpan_data') }}" method="post">
        @csrf
        <input type="text" name="nama" id="nama" placeholder="nama">
        <br><br>
        <input type="text" name="umur" id="umur" placeholder="umur">
        <br><br>
        <input type="text" name="mapel" id="mapel" placeholder="mapel">
        <br><br>
        <input type="submit" value="simpan">
    </form>
</body>
</html>
