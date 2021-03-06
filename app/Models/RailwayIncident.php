<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RailwayIncident extends Model
{
    use HasFactory;

    protected $table = 'railway_incident';

    protected $primaryKey = 'railway_incident_id';

    public $timestamps = false;

    
    public function Incident()
    {
        return $this->belongsTo(Incident::class, 'incident_id', 'incident_id');
    }

}
