<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plant extends Model
{
    protected $fillable = [
        'name',
        'latin_name',
        'icon_plant',
        'description',
        'planting_guide',
        'fertilizer_type',
        'fun_fact',
    ];

    public function userPlants()
    {
        return $this->hasMany(UserPlant::class);
    }
}
