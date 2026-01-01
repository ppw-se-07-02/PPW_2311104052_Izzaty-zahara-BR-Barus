<!DOCTYPE html>
<html>
<head>
    <title>Edit Donasi</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-4">
    <h3>Edit Data Donasi</h3>

    <form action="{{ route('donasi.update',$donasi->id) }}" method="POST">
        @csrf

        <div class="mb-2">
            <label>Nama Donatur</label>
            <input type="text" name="nama_donatur" value="{{ $donasi->nama_donatur }}" class="form-control">
        </div>

        <div class="mb-2">
            <label>Jumlah</label>
            <input type="number" name="jumlah" value="{{ $donasi->jumlah }}" class="form-control">
        </div>

        <div class="mb-2">
            <label>Tanggal Donasi</label>
            <input type="date" name="tanggal_donasi" value="{{ $donasi->tanggal_donasi }}" class="form-control">
        </div>

        <div class="mb-2">
            <label>Keterangan</label>
            <input type="text" name="keterangan" value="{{ $donasi->keterangan }}" class="form-control">
        </div>

        <button class="btn btn-primary mt-2">Update</button>
        <a href="{{ route('donasi.index') }}" class="btn btn-secondary mt-2">Kembali</a>
    </form>
</div>

</body>
</html>

