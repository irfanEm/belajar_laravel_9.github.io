<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=5, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Crud Dasar</title>
</head>
<body>
    <div class="container mt-2">
        <div class="div-md-2 py-2 border rounded border-success d-flex align-items-center justify-content-center">
            <p class="text-capitalize fw-bold"> " kamu hanya perlu terus berjalan, apapun yang terjadi, teruslah melangkah kedepan menuju tujuanmu."</p>
        </div>
        <div class="row border border-info rounded my-2">
            <div class="col-md-6 border border-start">
                <h2>Data GUru</h2>
                    <button class="btn btn-info btn-sm"><a href="{{ route('hal_tambah') }}" class="text-decoration-none text-light fw-bold">tambah</a></button>
                    <hr>
                    <table class="table table-dark table-hover table-borderless">
                        <thead>
                            <th>#</th>
                            <th>Nama</th>
                            <th>Umur</th>
                            <th>Mapel</th>
                        </thead>
                        <tbody>
                            @foreach($gurus as $guru)
                                <tr>
                                    <td>{{ $guru->id }}</td>
                                    <td><a class="text-decoration-none" href="{{ route('detail', $guru->id) }}">{{ $guru->name }}</a></td>
                                    <td>{{ $guru->age }}</td>
                                    <td>{{ $guru->mapel }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <hr>
                    <p>halaman : {{ $gurus->currentPage() }}</p>
                    <p>Total Data : {{ $gurus->total() }}</p>
                    <p>Jumlah Data perhalaman : {{ $gurus->perPage() }}</p>
                    <hr>
                    {{ $gurus->links('pagination::bootstrap-4') }}
            </div>
            <div class="col-md-6 border border-start">
                <h2>Data Siswa</h2>
                    <button class="btn btn-info btn-sm"><a href="{{ route('tambah_siswa') }}" class="text-decoration-none text-light fw-bold">tambah</a></button>
                    <hr>
                    <table class="table table-dark table-hover table-borderless">
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
                    <hr>
                    <p>halaman : {{ $murid2->currentPage() }}</p>
                    <p>Total Data : {{ $murid2->total() }}</p>
                    <p>Jumlah Data perhalaman : {{ $murid2->perPage() }}</p>
                    <hr>
                    {{ $murid2->links('pagination::bootstrap-4') }}
            </div>
        </div>
    </div>
</body>
</html>
