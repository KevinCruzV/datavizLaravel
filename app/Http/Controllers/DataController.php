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
        $country = Countrys::find(1);
        var_dump($country->name);
        var_dump($country->incident);
        
    }
}
