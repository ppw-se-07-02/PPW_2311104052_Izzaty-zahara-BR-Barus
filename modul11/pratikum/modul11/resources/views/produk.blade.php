<!DOCTYPE html>
<html lang="en">
<head>
<title>Data Produk</title>
</head>
<body>
Produk 1 : {{ $prod1; }}
<br>
Produk 2 : {{ $prod2; }}
<br>
Produk 3 : {{ $prod3; }}
</body>
@extends('master')
@section('title','Data Produk')
@section('content')
Produk 1 : {{ $prod1; }}
<br>
Produk 2 : {{ $prod2; }}
<br>
Produk 2 : {{ $prod3; }}
@endsection
</html>