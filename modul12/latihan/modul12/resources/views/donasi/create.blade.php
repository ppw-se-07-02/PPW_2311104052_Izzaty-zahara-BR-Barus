<!DOCTYPE html>
<html>
<head>
    <title>Tambah Donasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h3>Tambah Data Donasi</h3>

    <form action="{{ route('donasi.store') }}" method="POST">
        @csrf

        <div class="mb-2">
            <label>Nama Donatur</label>
            <input type="text" name="nama_donatur" class="form-control" required>
        </div>

        <div class="mb-2">
            <label>Jumlah Donasi (Rp)</label>
            <input type="number" name="jumlah" class="form-control" required>
        </div>

        <div class="mb-2">
            <label>Tanggal Donasi</label>
            <input type="date" name="tanggal_donasi" class="form-control" required>
        </div>

        <div class="mb-2">
            <label>Keterangan</label>
            <input type="text" name="keterangan" class="form-control">
        </div>

        <button class="btn btn-success mt-2">Simpan</button>
        <a href="{{ route('donasi.index') }}" class="btn btn-secondary mt-2">Kembali</a>
    </form>
</div>

</body>
</html>
