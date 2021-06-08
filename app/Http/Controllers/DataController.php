<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Countrys;
use App\Models\Incident;
use App\Models\organistion;

use Illuminate\Http\Request;

class DataController extends Controller
{
    public function data()
    {
        $franceData = Countrys::find(1);
        //var_dump($franceData->name);
        //var_dump($franceData->incident->stations_number);
        //var_dump($franceData->organisation->station_frequentation);

    
        $japanData = Countrys::find(2);
        //var_dump($japanData->name);
        //var_dump($japanData->incident->stations_number);
        //var_dump($japanData->organisation->station_frequentation);
    
        return view('test', [
            'nameFrance' => $franceData->name,
            'stations_number' => $franceData->incident->stations_number,
            'nameJapan' => $japanData->name
            ]);
    }
}