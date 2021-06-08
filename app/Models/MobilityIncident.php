<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobilityIncident extends Model
{
    use HasFactory;

    protected $table = 'mobility_incident';

    protected $primaryKey = 'mobility_incident_id';

    public $timestamps = false;

    
    public function Incident()
    {
        return $this->belongsTo(Incident::class, 'incident_id', 'incident_id');
    }
}
