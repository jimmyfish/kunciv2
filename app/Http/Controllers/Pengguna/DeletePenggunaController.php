<?php

namespace App\Http\Controllers\Pengguna;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pengguna;

class DeletePenggunaController extends Controller
{
    public function index(Request $request)
    {
        /**
         * Ambil data sesuai yang diminta.
         */
        $pengguna = Pengguna::find($request->id);

        /**
         * Fungsi untuk menghapus.
         */
        $pengguna->delete();

        return redirect()->route('list_pengguna');
    }
}
