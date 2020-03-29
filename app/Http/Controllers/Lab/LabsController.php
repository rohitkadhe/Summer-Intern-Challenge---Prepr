<?php

namespace App\Http\Controllers\Lab;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Model\Lab;
use App\Http\Model\Location;

class LabsController extends Controller
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

    public function showAllLabs()
    {
        $labs = Lab::where('privacy', 'Public')->paginate(5);
        return view('labs.labs')->with('labs', $labs);
    }
    
    public function showLab($id)
    {
        $lab = Lab::find($id);
        $location = Location::find($lab->location_id);
        return view('labs.labdetails')->with('lab', $lab)->with('location', $location);
    }
}
