<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Countrys;
use App\Models\Incident;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function data()
    {
        $country = Countrys::all();
        $km_voie = $country->incident->km_railway;

        
        return view('index', [

            "country" => $country,
            "km_voie" => $km_voie


        ]);
    }
}
