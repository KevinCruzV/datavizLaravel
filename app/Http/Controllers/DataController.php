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
<<<<<<< HEAD
        $country = Countrys::all();
        $km_voie = $country->incident->km_railway;

        
        return view('index', [

            "country" => $country,
            "km_voie" => $km_voie


=======
        $franceData = Countrys::find(1);
        //var_dump($franceData->name);
        //var_dump($franceData->incident->stations_number);
        //var_dump($franceData->organisation->station_frequentation);

    
        $japanData = Countrys::find(2);
        //var_dump($japanData->name);
        //var_dump($japanData->incident->stations_number);
        //var_dump($japanData->organisation->station_frequentation);
    
        return view('index', [
            'nameFrance' => $franceData->name,
            'nameJapan' => $japanData->name,
            'numberEmployeesFrance' => $franceData->organisation->number_employees,
            'numberEmployeesJapan' => $japanData->organisation->number_employees,
            'priceTicketFrance' => $franceData->organisation->ticket_price,
            'priceTicketJapan' => $japanData->organisation->ticket_price,
            'sizeRailwayFrance' => $franceData->incident->km_railway,
            'sizeRailwayJapan' => $japanData->incident->km_railway,
        
>>>>>>> 708ace52f44d6f74bafc33c86cd0283209a753a2
        ]);
    }
}