<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Model\Pengaduan;

class petugasController extends Controller
{
    function index(){
        return view("loginPetugas");
    }
    public function login(Request $request){

        $data = $request->only("username", "password");
        if(Auth::guard("petugas")->attempt($data)){
            return redirect('/petugas');
        }else{
            return redirect('/loginPetugas');
        }
    }

    function tampilPetugas(){
        return view('petugas');
    }
    function tampilData() {
        $title = "Detail Laporan";
        $pengaduan = DB::table('pengaduan')->get();
        // $pengaduan = DB::table('pengaduan')
        //     ->join('masyarakat', 'pengaduan.nik', '=', 'masyarakat.nik')
        //     ->select('masyarakat.nama', 'pengaduan.isi_laporan', 'pengaduan.foto', 'pengaduan.status')
        //     ->get();

        return view('/petugas', [
            "title" => $title,
            "pengaduan" => $pengaduan   
        ]);
    }
    
}
