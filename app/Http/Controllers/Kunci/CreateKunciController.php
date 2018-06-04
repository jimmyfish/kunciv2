<?php

namespace App\Http\Controllers\Kunci;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kunci;

class CreateKunciController extends Controller
{
    public function index(Request $request)
    {
        if ($request->isMethod('post')) {
            $kunci = new Kunci;

            $kunci->nama_lokasi = $request->nama_lokasi;
            $kunci->keterangan = $request->keterangan;

            $kunci->save();
        }

        return view('kunci.create');
    }
}
