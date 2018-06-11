<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListKunciAsRegionController extends Controller
{
    public function index(Request $request)
    {
        $pengguna = \App\Pengguna::find($request->pengguna_id);

        $kunci = \App\Kunci::where([
            'region_id' => $pengguna->region_id,
            'is_available' => 1,
        ]);

        return $kunci->get()->toArray();
    }
}
