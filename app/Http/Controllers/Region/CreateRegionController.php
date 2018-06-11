<?php

namespace App\Http\Controllers\Region;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class CreateRegionController extends Controller
{
    public function index(Request $request)
    {
        if ($request->isMethod('post')) {
            $region = new \App\Region;

            $region->nama_region = $request->nama_region;

            $region->save();

            return redirect()->route('list_region');
        }
        
        return view('region.create');
    }
}
