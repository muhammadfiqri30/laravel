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
<div class="container">
    <h1 style="margin-top: 30px; text-align: center;">Pengaduan Masyarakat</h1>
<table class="table" style="background-color: #ccc; margin-top: 50px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
  <thead>
    <tr>
      <th scope="col">Nama</th>
      <th scope="col">Laporan</th>
      <th scope="col">Foto</th>
      <th scope="col">tanggal pengaduan</th>
      <th scope="col">status</th>
      <th scope="col">Tanggapan</th>
      <th scope="col">tanggal tanggapan</th>
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
      <td><select class="form-select form-select-sm" aria-label=".form-select-sm example">
  <option selected>Satus</option>
  <option value="1">0</option>
  <option value="2">proses</option>
  <option value="3">selesai</option>
  <option value="4">batalkan</option>
</select>
</select></td>
      <td><form action="homepage_petugas.php" method="post">
        <input type="hidden" name="id" value="<?= $id ?>">
            <div class="mb-3">
              <label for="" class="form-label"></label>
              <textarea class="form-control" name="tanggapan" id="" rows="3"></textarea>
            </div>
                <button type="submit" class="btn btn-outline-primary">Berikan Tanggapan</button>
      </form></td>  
      <td><?=$data['tgl_pengaduan'] ?></td>
    </tr>
    <?php } ?>
  </tbody>
</table>
</div>
</body>
</html>
@endsection