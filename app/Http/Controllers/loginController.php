<?php

namespace App\Http\Controllers;

use App\Http\Middleware\RedirectIfAuthenticated;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class loginController extends Controller
{
    function login() {
        return view('login');
    }

    function proses_login(Request $request) {
        $data_login = $request->only('username', 'password');
        $masuk = Auth::attempt($data_login);
        if($masuk){
            return redirect('/laporan');
        }else{
            return redirect('/login');
        }
    }
        function logout(){
            auth::logout();
            return redirect('/login');
    }
}