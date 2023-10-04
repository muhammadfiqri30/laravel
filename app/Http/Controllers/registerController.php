<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class registerController extends Controller
{
    function register (){
        return view('register');
    }

    function proses_tambah_petugas(Request $request) {

        $nama_petugas = $request->nama_petugas;
        $username = $request->username;
        $password = $request->password;
        $telp = $request->telp;
        $level = $request->level;
    
        DB::table('petugas')->insert([
            'nama_petugas' => $nama_petugas,
            'username' => $username,
            'password' => $password,
            'telp' => $telp,
            'level' => "petugas"
        ]);
        return redirect('/login');
    }
}

