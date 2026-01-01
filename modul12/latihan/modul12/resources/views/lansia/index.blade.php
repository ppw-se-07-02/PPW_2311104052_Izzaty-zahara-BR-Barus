<!DOCTYPE html>
<html>
<head>
    <title>Data Lansia - Panti Wreda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-4">
    <h2 class="mb-3">Data Lansia Panti Wreda</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('lansia.create') }}" class="btn btn-primary mb-3">+ Tambah Lansia</a>

    <table class="table table-bordered table-striped">
        <tr class="text-center">
            <th>No</th>
            <th>Nama</th>
            <th>JK</th>
            <th>Tgl Lahir</th>
            <th>Alamat</th>
            <th>Penyakit</th>
            <th>Tgl Masuk</th>
            <th>Aksi</th>
        </tr>

        @foreach($lansias as $l)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $l->nama_lengkap }}</td>
            <td>{{ $l->jenis_kelamin }}</td>
            <td>{{ $l->tanggal_lahir }}</td>
            <td>{{ $l->alamat }}</td>
            <td>{{ $l->penyakit }}</td>
            <td>{{ $l->tanggal_masuk }}</td>
            <td>
                <a href="{{ route('lansia.edit',$l->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <a href="{{ route('lansia.delete',$l->id) }}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin hapus?')">Hapus</a>
            </td>
        </tr>
        @endforeach

    </table>
</div>

</body>
</html>
