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
<div class="container" class="table" style="padding: 30px;background-color: #ccc; margin-top: 50px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
<h1 style="text-align: center;">Laporan</h1>
<form action="" method="post" enctype="multipart/form-data">
  @method("POST")
  @csrf
  <div class="mb-3">
  <label for="formFile" class="form-label">Bukti/Foto</label>
  <input name="foto" class  ="form-control" type="file" id="formFile">
</div>
<div class="mb-3">
  <label for="exampleFormControlTextarea1" class="form-label">Laporan</label>
  <textarea name="isi_laporan" class= "form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
  @error("laporan")
    <div>{{$message}}</div>
  @enderror
</div>
  <input type="submit" value="laporkan" class="btn btn-primary" style="margin-bottom: 10px;">
</form>
</div>
</body>
</html>
@endsection