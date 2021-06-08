<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Http\Request;

class IncidentReseauController extends Controller
{
    use HasFactory;
    /**
     * nom de la table
     *
     * @var string $table
     */
    protected $table = 'railway_incident';

    /**
     * clef primaire
     *
     * @var string 
     */
    protected $primaryKey = 'railway_incident_id';

    /**
     * Pas de table avec dates
     *
     * @var boolean
     */
    public $timestamps = false;

    // public function countrys()
    // {
    //     $this->belongsToMany(Countrys::class, 'have_incident', 'incident_id', 'country_id', 'incident_id', 'country_id');
    // }
}
