@extends('layout.app')
<style>
  *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-image: linear-gradient(to right, rgba(255,0,0,0), rgba(255,0,0,1));
}
</style>

@section('content')

<div class="container" class="table" style="padding: 30px;background-color: #ccc; margin-top: 50px; box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);">
<h1 style="text-align: center;">Update Data</h1>
      <form method="POST" action="" class="container mt-3">
        @csrf
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label" style="color: white;">Isi Laporan</label>
          <input type="text" class="form-control" name="isi_laporan" id="exampleInputPassword1" value="{{ $pengaduan->isi_laporan }}">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label" style="color: white;">Foto</label>
          <input type="file" class="form-control" name="foto" id="exampleInputPassword1" value="{{ $pengaduan->foto }}">
        </div>
        <center><input type="submit" value="edit" class="btn btn-outline-primary" style="margin-bottom: 10px;"></center>
      </form>
</div>
@endsection