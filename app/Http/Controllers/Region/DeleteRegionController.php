<?php

namespace App\Http\Controllers\Region;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeleteRegionController extends Controller
{
    public function index(Request $request)
    {
        $data = \App\Region::find($request->id);

        if ($data instanceof \App\Region) {
            $data->delete();

            return redirect()->route('list_region');
        } else {

            return 'Data Not valid';
        }
    }
}
