<!DOCTYPE html>
<html>
<head>
    <title>Edit Lansia</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

<div class="container mt-4">
    <h3>Edit Data Lansia</h3>

    <form action="{{ route('lansia.update',$lansia->id) }}" method="POST">
        @csrf

        <div class="mb-2">
            <label>Nama Lengkap</label>
            <input type="text" name="nama_lengkap" value="{{ $lansia->nama_lengkap }}" class="form-control">
        </div>

        <div class="mb-2">
            <label>Jenis Kelamin</label>
            <select name="jenis_kelamin" class="form-control">
                <option value="L" {{ $lansia->jenis_kelamin=='L'?'selected':'' }}>Laki-laki</option>
                <option value="P" {{ $lansia->jenis_kelamin=='P'?'selected':'' }}>Perempuan</option>
            </select>
        </div>

        <div class="mb-2">
            <label>Tanggal Lahir</label>
            <input type="date" name="tanggal_lahir" value="{{ $lansia->tanggal_lahir }}" class="form-control">
        </div>

        <div class="mb-2">
            <label>Alamat</label>
            <textarea name="alamat" class="form-control">{{ $lansia->alamat }}</textarea>
        </div>

        <div class="mb-2">
            <label>Penyakit</label>
            <input type="text" name="penyakit" value="{{ $lansia->penyakit }}" class="form-control">
        </div>

        <div class="mb-2">
            <label>Tanggal Masuk</label>
            <input type="date" name="tanggal_masuk" value="{{ $lansia->tanggal_masuk }}" class="form-control">
        </div>

        <button class="btn btn-primary mt-2">Update</button>
        <a href="{{ route('lansia.index') }}" class="btn btn-secondary mt-2">Kembali</a>
    </form>
</div>

</body>
</html>
