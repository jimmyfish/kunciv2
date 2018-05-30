<?php

namespace App\Http\Controllers\Kunci;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListKunciController extends Controller
{
    public function index()
    {
        $kunci = \App\Kunci::all();

        return view('kunci.list')->with('kunci', $kunci);
    }
}
