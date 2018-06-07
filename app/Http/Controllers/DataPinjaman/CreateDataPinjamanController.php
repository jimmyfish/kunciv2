<?php

namespace App\Http\Controllers\DataPinjaman;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kunci;
use App\Pengguna;
use App\DataPinjaman;
use DateInterval;

class CreateDataPinjamanController extends Controller
{
    public function index(Request $request)
    {
        $pengguna = Pengguna::all();

        $kunci = Kunci::where('is_available', 1)->get();

        if ($request->isMethod('post')) {
            $dataPinjaman = new DataPinjaman;

            $jam = new \DateTime();
            $jamBaru = clone $jam;
            $jamBaru->add(new DateInterval('PT8H'));

            $dataPinjaman->kunci_id = $request->nama_kunci;
            $dataPinjaman->pengguna_id = $request->nama_pengguna;
            $dataPinjaman->waktu_pinjam = $jam;
            $dataPinjaman->waktu_kembali = $jamBaru;
            $dataPinjaman->is_proccessed = 0;

            $kunciUpdate = Kunci::find($request->nama_kunci);
            $kunciUpdate->is_available = 0;
            $kunciUpdate->save();

            $dataPinjaman->save();

            return redirect()->route('list_data_pinjaman');
        }

        return view('data-pinjaman.create')->with([
            'kunci' => $kunci,
            'pengguna' => $pengguna,
        ]);
    }
}
