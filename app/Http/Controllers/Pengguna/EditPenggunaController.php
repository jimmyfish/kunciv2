<?php

namespace App\Http\Controllers\Pengguna;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pengguna;

class EditPenggunaController extends Controller
{
    public function index(Request $request)
    {
        /**
         * Mengambil data yang sudah tersimpan untuk diedit.
         */
        $pengguna = Pengguna::find($request->id);

        /**
         * Menyimpan data sesudah di edit.
         * Method = POST, karena Edit adalah FORM.
         */
        if ($request->isMethod('post')) {
            $pengguna->nama = $request->nama;

            /**
             * Ini untuk menyimpan, JANGAN LUPA.
             */
            $pengguna->save();
        }

        return view('pengguna.edit')->with('pengguna', $pengguna);
    }
}
