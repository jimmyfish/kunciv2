<?php

namespace App\Http\Controllers\DataPinjaman;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataPinjaman;
use App\Kunci;

class KembalikanDataPinjamanController extends Controller
{
    public function index(Request $request)
    {
        $dataPinjaman = DataPinjaman::where('is_proccessed', 0)->get();

        if ($request->isMethod('post')) {
            $dataKembali = DataPinjaman::find($request->data_peminjaman);
            $dataKembali->is_proccessed = 1;
            $dataKembali->save();

            $kunci = Kunci::find($dataKembali->kunci->id);
            $kunci->is_available = 1;
            $kunci->save();

            $request->session()->flash('status', 'Kunci sudah dikembalikan!');

            return redirect()->route('list_data_pinjaman');
        }

        return view('data-pinjaman.kembali')->with('data', $dataPinjaman);
    }
}
