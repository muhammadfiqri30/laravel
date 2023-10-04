<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pengaduanController extends Controller
{
    function index(){

        $judul = "test";
        $pengaduan = DB::table('pengaduan')->get();
     
    
        return view('home', ['judul' => $judul, 'pengaduan' => $pengaduan]);
       }
    
      function proses_isi_pengaduan(){
       $judul = "Selamat Datang";
       return view('isi_pengaduan', ['textjudul' => $judul]);
      }
      function home(){
        $judul ="Selamat Datang";
        return view('home', ['textjudul' => $judul]);
      }
      function proses_tambah_pengaduan(Request $request){
        $isi_pengaduan = $request->isi_laporan;
        $nik = $request->nik->isi_laporan;

        DB::table('pengaduan')->insert([
            'tgl_pengaduan' => date('Y-m-d'),
            'nik' => $nik,
            'isi_laporan' => $isi_pengaduan,
            'foto' => '',
            'status' => '0'
        ]);

        return redirect('/home');
      }
}
