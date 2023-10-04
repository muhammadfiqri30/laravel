<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
</head>
<body>
@extends("layout.app")
@section('content')

{{$judul}}
  
  @foreach($pengaduan as $pengaduan)
  <p>{{$pengaduan->nik}} - {{ $pengaduan->isi_laporan}}</p>
@endforeach

<div class="container">
<h1 style="margin-top: 30px; text-align: center;">Pengaduan Masyarakat</h1>
<table class="table" style="background-color: #ccc; margin-top: 50px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Laporan</th>
      <th scope="col">Foto</th>
      <th scope="col">tanggal pengaduan</th>
      <th scope="col" style="text-align: center;">Aksi</th>
    </tr>
  </thead>
</body>
</html>
@endsection