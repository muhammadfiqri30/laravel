<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class pengaduanController extends Controller
{
    function index(){

        $judul = "test";
        // $pengaduan = DB::table('pengaduan')->get();

        $pengaduan = DB::table('pengaduan')
            ->join('masyarakat', 'pengaduan.nik', '=', 'masyarakat.nik')
            ->select('pengaduan.id_pengaduan as id_pengaduan','masyarakat.nama', 'pengaduan.isi_laporan', 'pengaduan.foto', 'pengaduan.status', 'pengaduan.tgl_pengaduan')
            ->get();


        return view('home', ['judul' => $judul, 'pengaduan' => $pengaduan]);
       }
    
      function proses_isi_pengaduan(){
       $judul = "Selamat Datang";
       return view('laporan', ['textjudul' => $judul]);
      }
      function home(){
        $judul ="Selamat Datang";
        return view('home', ['textjudul' => $judul]);
      }
      function proses_tambah_pengaduan(Request $request){
        $request->validate([
          'isi_laporan' => 'required',
          'foto' => 'required'
      ]);

      $namaFoto = $request->foto->getClientOriginalName();
      $request->foto->storeAs('public/img', $namaFoto);
      $isi_pengaduan = $request->isi_laporan;
      DB::table('pengaduan')->insert([
          'tgl_pengaduan' => date('Y-m-d'),
          'nik' => Auth::user()->nik,
          // 'nik' => '672345',
          'isi_laporan' => $isi_pengaduan,
          'foto' => $namaFoto,
          'status' => '0'
      ]);
        return redirect('/home');
      }
}