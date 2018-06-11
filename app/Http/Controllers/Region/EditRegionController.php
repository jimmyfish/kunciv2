<?php

namespace App\Http\Controllers\Region;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Region;

class EditRegionController extends Controller
{
    public function index(Request $request)
    {
        $region = Region::find($request->id);
        
        if ($region instanceof Region) {

            if ($request->isMethod('post')) {
                $region->nama_region = $request->nama_region;

                $region->save();
                return redirect()->route('list_region');
            }

            return view('region.edit')->with('region', $region);
        } else {

            return 'Data Not valid';
        }
    }
}
