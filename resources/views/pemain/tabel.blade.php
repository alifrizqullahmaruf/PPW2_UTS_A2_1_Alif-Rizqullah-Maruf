@extends('pemain.index')

@section('content')
    <h1 class="mt-5 mb-4 text-primary">Data Pemain</h1>

    <!-- Tabel Bootstrap untuk menampilkan data -->
    <table class="table table-striped table-bordered table-hover">
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
@endsection
