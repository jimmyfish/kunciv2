<?php

namespace App\Http\Controllers\Pengguna;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pengguna;

class AksiPenggunaController extends Controller
{
    public function edit(Request $request)
    {
        $pengguna = Pengguna::find($request->id);

        if ($request->isMethod('post')) {
            $pengguna->nama = $request->nama;

            $pengguna->save();

            return redirect()->route('list_pengguna');
        }

        return view('pengguna.edit')->with('pengguna', $pengguna);
    }

    public function hapus(Request $request)
    {
        $pengguna = Pengguna::find($request->id);

        $pengguna->delete();

        return redirect()->route('list_pengguna');
    }
}
