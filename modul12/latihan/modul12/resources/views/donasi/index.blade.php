<!DOCTYPE html>
<html>
<head>
    <title>Data Donasi - Panti Wreda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-4">
    <h2>Data Donasi Masuk</h2>

    @if(session('success'))
        <div class="alert alert-success mt-2">{{ session('success') }}</div>
    @endif

    <a href="{{ route('donasi.create') }}" class="btn btn-primary mt-3 mb-3">+ Tambah Donasi</a>

    <table class="table table-bordered">
        <tr class="text-center">
            <th>No</th>
            <th>Nama Donatur</th>
            <th>Jumlah</th>
            <th>Tanggal Donasi</th>
            <th>Keterangan</th>
            <th>Aksi</th>
        </tr>

        @forelse($donasi as $d)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $d->nama_donatur }}</td>
            <td>Rp {{ number_format($d->jumlah,0,',','.') }}</td>
            <td>{{ $d->tanggal_donasi }}</td>
            <td>{{ $d->keterangan }}</td>
            <td>
                <a href="{{ route('donasi.edit',$d->id) }}" class="btn btn-warning btn-sm">Edit</a>
                <a href="{{ route('donasi.delete',$d->id) }}" onclick="return confirm('Yakin hapus?')" class="btn btn-danger btn-sm">Hapus</a>
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="6" class="text-center text-muted">Belum ada data donasi</td>
        </tr>
        @endforelse
    </table>
</div>

</body>
</html>
