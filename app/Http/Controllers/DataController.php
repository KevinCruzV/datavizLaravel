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

            
            // Belgium Data
            'nameBelgique' => $belgiqueData->name,
            'compagnyBelgique' => $belgiqueData->compagny,
            'numberEmployeesBelgique' => $belgiqueData->organisation->number_employees,
            'priceTicketBelgique' => $belgiqueData->organisation->ticket_price,
            'frequentationBelgique' => $belgiqueData->organisation->station_frequentation,
            'sizeRailwayBelgique' => $belgiqueData->incident->km_railway,
            'speedAverageBelgique' => $belgiqueData->incident->speed_average,
            'numberStationBelgique' => $belgiqueData->incident->stations_number,

            'railwayIncidentNumberBelgique' => $belgiqueData->incident->railwayIncident->number,
            'railwayDeraillementBelgique' => $belgiqueData->incident->railwayIncident->deraillement,
            'railwayTracksDefaillanceBelgique' => $belgiqueData->incident->railwayIncident->tracks_defaillance,
            'railwaySignallingIncidentBelgique' => $belgiqueData->incident->railwayIncident->signalling_incident,
            'railwayWorkWithoutPermissionBelgique' => $belgiqueData->incident->railwayIncident->work_without_permission,
            'railwayOtherBelgique' => $belgiqueData->incident->railwayIncident->other,
            
            'mobilityIncidentNumberBelgique' => $belgiqueData->incident->mobilityIncident->number,
            'mobilityOpenDoorTrainBelgique' => $belgiqueData->incident->mobilityIncident->open_door_train,
            'mobilityCrossingStopSignalBelgique' => $belgiqueData->incident->mobilityIncident->Crossing_stop_signal,
            'mobilityOtherBelgique' => $belgiqueData->incident->mobilityIncident->other,
        
            
            // Russian data
            'nameRussie' => $russieData->name,
            'compagnyRussie' => $russieData->compagny,
            'numberEmployeesRussie' => $russieData->organisation->number_employees,
            'priceTicketRussie' => $russieData->organisation->ticket_price,
            'frequentationRussie' => $russieData->organisation->station_frequentation,
            'sizeRailwayRussie' => $russieData->incident->km_railway,
            'speedAverageRussie' => $russieData->incident->speed_average,
            'numberStationRussie' => $russieData->incident->stations_number,

            'railwayIncidentNumberRussie' => $russieData->incident->railwayIncident->number,
            'railwayDeraillementRussie' => $russieData->incident->railwayIncident->deraillement,
            'railwayTracksDefaillanceRussie' => $russieData->incident->railwayIncident->tracks_defaillance,
            'railwaySignallingIncidentRussie' => $russieData->incident->railwayIncident->signalling_incident,
            'railwayWorkWithoutPermissionRussie' => $russieData->incident->railwayIncident->work_without_permission,
            'railwayOtherRussie' => $russieData->incident->railwayIncident->other,
            
            'mobilityIncidentNumberRussie' => $russieData->incident->mobilityIncident->number,
            'mobilityOpenDoorTrainRussie' => $russieData->incident->mobilityIncident->open_door_train,
            'mobilityCrossingStopSignalRussie' => $russieData->incident->mobilityIncident->Crossing_stop_signal,
            'mobilityOtherRussie' => $russieData->incident->mobilityIncident->other,

        
            // Germany data
            'nameAllemagne' => $allemagneData->name,
            'compagnyAllemagne' => $allemagneData->compagny,
            'numberEmployeesAllemagne' => $allemagneData->organisation->number_employees,
            'priceTicketAllemagne' => $allemagneData->organisation->ticket_price,
            'frequentationAllemagne' => $allemagneData->organisation->station_frequentation,
            'sizeRailwayAllemagne' => $allemagneData->incident->km_railway,
            'speedAverageAllemagne' => $allemagneData->incident->speed_average,
            'numberStationAllemagne' => $allemagneData->incident->stations_number,

            'railwayIncidentNumberAllemagne' => $allemagneData->incident->railwayIncident->number,
            'railwayDeraillementAllemagnee' => $allemagneData->incident->railwayIncident->deraillement,
            'railwayTracksDefaillanceAllemagne' => $allemagneData->incident->railwayIncident->tracks_defaillance,
            'railwaySignallingIncidentAllemagne' => $allemagneData->incident->railwayIncident->signalling_incident,
            'railwayWorkWithoutPermissionAllemagne' => $allemagneData->incident->railwayIncident->work_without_permission,
            'railwayOtherAllemagne' => $allemagneData->incident->railwayIncident->other,
            
            'mobilityIncidentNumberAllemagne' => $allemagneData->incident->mobilityIncident->number,
            'mobilityOpenDoorTrainAllemagne' => $allemagneData->incident->mobilityIncident->open_door_train,
            'mobilityCrossingStopSignalAllemagne' => $allemagneData->incident->mobilityIncident->Crossing_stop_signal,
            'mobilityOtherAllemagne' => $allemagneData->incident->mobilityIncident->other,

        
        ]);
    }
}