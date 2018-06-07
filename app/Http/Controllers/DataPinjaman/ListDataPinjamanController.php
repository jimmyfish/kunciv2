<?php

namespace App\Http\Controllers\DataPinjaman;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\DataPinjaman;

class ListDataPinjamanController extends Controller
{
    public function index()
    {
        $data = DataPinjaman::all();

        return view('data-pinjaman.list')->with('data', $data);
    }
}
