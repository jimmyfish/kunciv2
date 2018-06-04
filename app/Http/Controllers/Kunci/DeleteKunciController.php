<?php

namespace App\Http\Controllers\Kunci;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Kunci;

class DeleteKunciController extends Controller
{
    public function index(Request $request)
    {
        $kunci = Kunci::find($request->id);

        $kunci->delete();

        return redirect()->route('list_kunci');
    }
}
