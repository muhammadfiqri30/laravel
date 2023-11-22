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
    <link rel="stylesheet" href="/css/home.css">
    <table class="table table-dark table-hover mt-5">
        <tr>
            <th>ID Pengaduan</th>
            <th>Tanggal Pengaduan</th>
            <th>NIK</th>
            <th>Isi Laporan</th>
            <th>Foto</th>
            <th>Status</th>
            <th>Opsi</th>
        </tr>
            <tr>
                <td>{{ $pengaduan->id_pengaduan }}</td>
                <td>{{ $pengaduan->tgl_pengaduan }}</td>
                <td>{{ $pengaduan->nik }}</td>
                <td>{{ $pengaduan->isi_laporan }}</td>
                <td>{{ $pengaduan->foto }}</td>
                <td>{{ $pengaduan->status }}</td>
                <td>
                    <button class="btn btn-primary" onclick="window.print()">Print</button>
                </td>
            </tr>    
        </table>
        <a href="/home"><input type="submit" value="kembali" name="submit" class="btn btn-outline-success"></a>
@endsection