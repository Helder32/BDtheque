<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class avis_model extends Model
{
    protected $table = 'avis'; // Nom de la table concernée par cette classe
    public $timestamps = false; // Désactive la gestion des colonnes created_at et updated_at

}
