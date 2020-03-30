<?php

namespace App\Http\Controllers\Map;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Location;

class MapController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function showLocationOnMap($id)
    {
     $location = Location::find($id);
     $data = [$location->latitude, $location->longitude, $location->address];
      return view('map.map')->with('data',$data);
    }
}
