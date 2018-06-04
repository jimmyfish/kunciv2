<?php

namespace App\Http\Controllers\Pengguna;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pengguna;

class CreatePenggunaController extends Controller
{
    public function index(Request $request)
    {
        if ($request->isMethod('post')) {
            $pengguna = new Pengguna;

            $pengguna->nama = $request->nama;

            $pengguna->save();
        }
        
        return view('pengguna.create');
    }
}
