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
    
        return view('index', [

            // French data 
            'nameFrance' => $franceData->name,
            'compagnyFrance' => $franceData->compagny,
            'numberEmployeesFrance' => $franceData->organisation->number_employees,
            'priceTicketFrance' => $franceData->organisation->ticket_price,
            'frequentationFrance' => $franceData->organisation->station_frequentation,
            'sizeRailwayFrance' => $franceData->incident->km_railway,
            'speedAverageFrance' => $franceData->incident->speed_average,
            'numberStationFrance' => $franceData->incident->stations_number,

            'railwayIncidentNumberFrance' => $franceData->incident->railwayIncident->number,
            'railwayDeraillementFrance' => $franceData->incident->railwayIncident->deraillement,
            'railwayTracksDefaillanceFrance' => $franceData->incident->railwayIncident->tracks_defaillance,
            'railwaySignallingIncidentFrance' => $franceData->incident->railwayIncident->signalling_incident,
            'railwayWorkWithoutPermissionFrance' => $franceData->incident->railwayIncident->work_without_permission,
            'railwayOtherFrance' => $franceData->incident->railwayIncident->other,

            'mobilityIncidentNumberFrance' => $franceData->incident->mobilityIncident->number,
            'mobilityOpenDoorTrainFrance' => $franceData->incident->mobilityIncident->open_door_train,
            'mobilityCrossingStopSignalFrance' => $franceData->incident->mobilityIncident->Crossing_stop_signal,
            'mobilityOtherFrance' => $franceData->incident->mobilityIncident->other,



            // Japan Data
            'nameJapan' => $japanData->name,
            'compagnyJapan' => $japanData->compagny,
            'numberEmployeesJapan' => $japanData->organisation->number_employees,
            'priceTicketJapan' => $japanData->organisation->ticket_price,
            'frequentationJapan' => $japanData->organisation->station_frequentation,
            'sizeRailwayJapan' => $japanData->incident->km_railway,
            'speedAverageJapan' => $japanData->incident->speed_average,
            'numberStationJapan' => $japanData->incident->stations_number,

            'railwayIncidentNumberJapan' => $japanData->incident->railwayIncident->number,
            'railwayDeraillementJapan' => $japanData->incident->railwayIncident->deraillement,
            'railwayTracksDefaillanceJapan' => $japanData->incident->railwayIncident->tracks_defaillance,
            'railwaySignallingIncidentJapan' => $japanData->incident->railwayIncident->signalling_incident,
            'railwayWorkWithoutPermissionJapan' => $japanData->incident->railwayIncident->work_without_permission,
            'railwayOtherJapan' => $japanData->incident->railwayIncident->other,
            
            'mobilityIncidentNumberJapan' => $japanData->incident->mobilityIncident->number,
            'mobilityOpenDoorTrainJapan' => $japanData->incident->mobilityIncident->open_door_train,
            'mobilityCrossingStopSignalJapan' => $japanData->incident->mobilityIncident->Crossing_stop_signal,
            'mobilityOtherJapan' => $japanData->incident->mobilityIncident->other,

        ]);
    }
}