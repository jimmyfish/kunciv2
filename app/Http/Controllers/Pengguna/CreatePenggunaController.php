<?php

namespace App\Http\Controllers\Pengguna;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pengguna;

class CreatePenggunaController extends Controller
{
    public function index(Request $request)
    {
        $region = \App\Region::all();

        if ($request->isMethod('post')) {
            $pengguna = new Pengguna;

            $pengguna->nama = $request->nama;
            $pengguna->region_id = $request->region_id;
            $pengguna->alamat = $request->alamat;
            $pengguna->no_telp = $request->no_telp;

            $pengguna->save();

            return redirect()->route('list_pengguna');
        }
        
        return view('pengguna.create')->with('region', $region);
    }
}
