<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RailwayIncident extends Model
{
    use HasFactory;

    protected $table = 'countrys';

    protected $primaryKey = 'country_id';
    
    public $timestamps = false;

}
