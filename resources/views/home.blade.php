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

@extends("layout.app")
@section('content')

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
  <tbody>
    <?php $koneksi = mysqli_connect("localhost","root","","pengaduan_masyarakat");
    $join = "SELECT * FROM pengaduan join masyarakat on masyarakat.nik = pengaduan.nik";
    $select = mysqli_query($koneksi ,$join);
    ?>
    <?php while($data = mysqli_fetch_array($select)){ ?>
    <tr>
      <td><?=$data['nama'] ?></td>
      <td><?=$data['isi_laporan'] ?></td>
      <td><img src="foto/<?=$data['foto'] ?>" width="250px"></td>
      <td><?=$data['tgl_pengaduan'] ?></td>  
      <td><center>
      <a href="edit.php?id=<?php echo $data ["id_pengaduan"]?>"><input type="button" value="edit" class="btn btn-outline-success"></a>
      <a href="proses_hapus.php?id=<?php echo $data ["id_pengaduan"]?>"><input type="button" value="hapus" class="btn btn-outline-danger"></a>
      <a href="lihat_masyarakat.php"><input type="button" value="lihat" class="btn btn-outline-primary"></a>
      </center></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
<a href="laporan"><input type="submit" value="tambah" name="submit" class="btn btn-outline-danger"></a>
</div>
</body>
</html>
@endsection