<?php

namespace App\Http\Controllers\Pengguna;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Pengguna;

class ListPenggunaController extends Controller
{
    public function index()
    {
        $pengguna = Pengguna::all();

        return view('pengguna.list')->with('pengguna', $pengguna);
    }
}
