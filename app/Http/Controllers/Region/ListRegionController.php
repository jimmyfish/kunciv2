<?php

namespace App\Http\Controllers\Region;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ListRegionController extends Controller
{
    public function index()
    {
        $region = \App\Region::all();

        return view('region.list')->with('region', $region);
    }
}
