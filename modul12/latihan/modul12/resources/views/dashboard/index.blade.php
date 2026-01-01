<!DOCTYPE html>
<html>
<head>
    <title>Dashboard Panti Wreda</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="p-4">

<h2>Dashboard Panti Wreda</h2>

<div class="row mt-3">

    <div class="col-md-4">
        <div class="card bg-primary text-white p-3">
            <h4>Total Lansia</h4>
            <h2>{{ $total_lansia }}</h2>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card bg-success text-white p-3">
            <h4>Total Donasi Uang</h4>
            <h2>Rp {{ number_format($total_donasi_uang,0,',','.') }}</h2>
        </div>
    </div>

    <div class="col-md-4">
        <div class="card bg-warning p-3">
            <h4>Total Donasi Barang</h4>
            <h2>{{ $total_donasi_barang }}</h2>
        </div>
    </div>

</div>

<hr>

<ul class="nav nav-tabs mt-3">
    <li class="nav-item">
        <a class="nav-link active" data-bs-toggle="tab" href="#lansia">Data Lansia</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#uang">Donasi Uang</a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-bs-toggle="tab" href="#barang">Donasi Barang</a>
    </li>
</ul>

<div class="tab-content">

<!-- =================== LANSIA =================== -->
<div class="tab-pane fade show active p-3" id="lansia">

<a href="{{ route('lansia.create') }}" class="btn btn-primary mb-2">+ Tambah Lansia</a>

<table class="table table-bordered">
<tr>
<th>No</th><th>Nama</th><th>JK</th><th>Tgl Lahir</th><th>Alamat</th><th>Penyakit</th>
</tr>

@foreach($lansia as $l)
<tr>
<td>{{ $loop->iteration }}</td>
<td>{{ $l->nama_lengkap }}</td>
<td>{{ $l->jenis_kelamin }}</td>
<td>{{ $l->tanggal_lahir }}</td>
<td>{{ $l->alamat }}</td>
<td>{{ $l->penyakit }}</td>
</tr>
@endforeach

</table>
</div>

<!-- =================== UANG =================== -->
<div class="tab-pane fade p-3" id="uang">

<a href="{{ route('donasi-uang.create') }}" class="btn btn-success mb-2">+ Tambah Donasi Uang</a>

<table class="table table-bordered">
<tr>
<th>No</th><th>Donatur</th><th>Jumlah</th><th>Tanggal</th><th>Keterangan</th>
</tr>

@foreach($donasi_uang as $d)
<tr>
<td>{{ $loop->iteration }}</td>
<td>{{ $d->nama_donatur }}</td>
<td>Rp {{ number_format($d->jumlah,0,',','.') }}</td>
<td>{{ $d->tanggal }}</td>
<td>{{ $d->keterangan }}</td>
</tr>
@endforeach

</table>
</div>

<!-- =================== BARANG =================== -->
<div class="tab-pane fade p-3" id="barang">

<a href="{{ route('donasi-barang.create') }}" class="btn btn-warning mb-2">+ Tambah Donasi Barang</a>

<table class="table table-bordered">
<tr>
<th>No</th><th>Donatur</th><th>Barang</th><th>Jumlah</th><th>Tgl</th><th>Keterangan</th>
</tr>

@foreach($donasi_barang as $b)
<tr>
<td>{{ $loop->iteration }}</td>
<td>{{ $b->nama_donatur }}</td>
<td>{{ $b->nama_barang }}</td>
<td>{{ $b->jumlah }} {{ $b->satuan }}</td>
<td>{{ $b->tanggal }}</td>
<td>{{ $b->keterangan }}</td>
</tr>
@endforeach

</table>
</div>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
