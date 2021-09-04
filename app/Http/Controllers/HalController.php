<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HalController extends Controller
{
    public function halhal(){
        return view('Halaman');
    }

    public function kirim(Request $request){
        $nama = $request['firstname'];
        $namabelakang = $request['lastname'];
        return view('selamat', compact('nama', 'namabelakang'));
    }
}
