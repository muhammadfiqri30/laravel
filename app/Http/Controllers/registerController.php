<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class registerController extends Controller
{
    function register_masyarakat(){
        return view('register');
    }

    function proses_tambah_masyarakat(Request $request){
        $nik = $request->nik;
        $nama = $request->nama;
        $username = $request->username;
        $password = $request->password;
        $telp = $request->telp;
    
        DB::table('masyarakat')->insert([
            'nik' => $nik,
            'nama' => $nama,
            'username' => $username,
            'password' => Hash::make($password),
            'telp' => $telp,
        ]);
        return redirect('/login');
    }
}

