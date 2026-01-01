<!DOCTYPE html>
<html>
<head>
    <title>Tambah Lansia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-4">
    <h3>Tambah Data Lansia</h3>

    <form action="{{ route('lansia.store') }}" method="POST">
        @csrf

        <div class="mb-2">
            <label>Nama Lengkap</label>
            <input type="text" name="nama_lengkap" class="form-control" required>
        </div>

        <div class="mb-2">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control">
                <option value="L">Laki-laki</option>
                <option value="P">Perempuan</option>
            </select>
        </div>

        <div class="mb-2">
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" class="form-control" required>
        </div>

        <div class="mb-2">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control" required></textarea>
        </div>

        <div class="mb-2">
            <label>Penyakit</label>
            <input type="text" name="penyakit" class="form-control">
        </div>

        <div class="mb-2">
            <label>Tanggal Masuk</label>
            <input type="date" name="tanggal_masuk" class="form-control" required>
        </div>

        <button class="btn btn-success mt-2">Simpan</button>
        <a href="{{ route('lansia.index') }}" class="btn btn-secondary mt-2">Kembali</a>
    </form>
</div>

</body>
</html>
