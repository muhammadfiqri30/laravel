<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class pengaduanMasyarakatController extends Controller
{
    function index(){

        $judul = "test";
        $pengaduan = DB::table('pengaduan')->get();
    }
}
