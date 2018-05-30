<?php

namespace App\Http\Controllers\Kunci;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kunci;

class AksiKunciController extends Controller
{
    public function edit(Request $request)
    {
        $kunci = Kunci::find($request->id);

        if ($request->isMethod('post')) {
            $kunci->nama_lokasi = $request->nama_lokasi;

            $kunci->save();

            return redirect()->route('list_kunci');
        }

        return view('kunci.edit')->with('kunci', $kunci);
    }

    public function hapus(Request $request)
    {
        $kunci = Kunci::find($request->id);

        $kunci->delete();

        return redirect()->route('list_kunci');
    }
}
