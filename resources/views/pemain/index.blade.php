<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index</title>
    <!-- Tambahkan link Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('partials.navbar');

    <!-- Konten Utama -->
    <div class="container m-5">
        @yield('pemain.content')
    </div>
    <h1 class="mt-5 mb-4 text-primary">Data Pemain</h1>

    <!-- Tabel Bootstrap untuk menampilkan data -->
    <table class="table table-striped table-bordered table-hover ">
        <thead>
            <tr class="bg-primary text-white">
                <th>No</th>
                <th>Nama Pemain</th>
                <th>No Punggung</th>
                <th>Posisi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($data_pemain as $pemain)
            <tr>
                <td>{{ $no++ }}</td>
                <td>{{ $pemain->nama_pemain }}</td>
                <td>{{ $pemain->no_punggung }}</td>
                <td>{{ $pemain->posisi }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
