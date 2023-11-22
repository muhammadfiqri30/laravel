<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="bootstrap-5.0.2-dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

@extends("layout.appPetugas")
@section('content')

<div class="container">
    <h1 style="margin-top: 30px; text-align: center;">Pengaduan Masyarakat</h1>
<table class="table" style="background-color: #ccc; margin-top: 50px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);" >
  <thead>
    <tr>
      <th>Nama</th>
      <th>Laporan</th>
      <th>Foto</th>
      <th>tanggal pengaduan</th>
      <th>status</th>
      <th style="text-align: center;">Aksi</th>
    </tr>
    @foreach ($pengaduan as $d)
      <tr>
         <td>{{ $d->nama }}</td>
         <td>{{ $d->isi_laporan }}</td>
         <td><img width="100" img src='{{asset("storage/img/$d->foto")}}' /></td>
         <td>{{ $d->tgl_pengaduan }}</td>
         <td>{{ $d->status }}</td>
         <td><center>
         <a href="/detailLaporan/hapus/{{ $d->id_pengaduan }}"><button type="submit" class="btn btn-outline-danger">Delete</button></a>
         <a href="/detailLaporan/detail/{{ $d->id_pengaduan }}"><button type="submit" class="btn btn-outline-primary">Detail</button></a>
         <a href="/detailLaporan/update/{{ $d->id_pengaduan }}"><button type="submit" class="btn btn-outline-success">Update</button></a>
         </td></center>
        </tr>
        @endforeach
  </thead>
</table>
<a href="laporan"><input type="submit" value="tambah" name="submit" class="btn btn-outline-danger"></a>
</div>
</body>
</html>
@endsection