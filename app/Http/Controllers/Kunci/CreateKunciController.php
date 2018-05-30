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

            $kunci->nama_lokasi = $request['nama_lokasi'];
            $kunci->save();

            return redirect()->route('list_kunci');
        }

        return view('kunci.create');
    }
}
