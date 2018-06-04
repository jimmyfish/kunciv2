<?php

namespace App\Http\Controllers\Kunci;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kunci;

class EditKunciController extends Controller
{
    public function index(Request $request)
    {
        $kunci = Kunci::find($request->id);

        if($request->isMethod('post')) {
            $kunci->nama_lokasi = $request->nama_lokasi;
            $kunci->keterangan = $request->keterangan;

            $kunci->save();
        }

        return view('kunci.edit')->with('kunci', $kunci);
    }
}
