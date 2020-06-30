<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register()
    {
        return view('register');
    }

    public function welcome(Request $request)
    {
        $nama1 = $request["first-name"];
        $nama2 = $request["last-name"];
        return view('welcome', ['nama1'=>$nama1, 'nama2'=>$nama2]);
    }
}
