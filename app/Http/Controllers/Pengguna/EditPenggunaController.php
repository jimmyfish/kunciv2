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

        if ($pengguna instanceof Pengguna) {
            /**
             * Menyimpan data sesudah di edit.
             * Method = POST, karena Edit adalah FORM.
             */
            if ($request->isMethod('post')) {
                $pengguna->nama = $request->nama;
                $pengguna->alamat = $request->alamat;
                $pengguna->no_telp = $request->no_telp;

                /**
                 * Ini untuk menyimpan, JANGAN LUPA.
                 */
                $pengguna->save();
            }

            return view('pengguna.edit')->with('pengguna', $pengguna);
        } else {
            return 'Data not Valid!';
        }
    }
}
