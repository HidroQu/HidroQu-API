<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
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
        'duration_plant',
    ];

    protected function iconPlant(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => $value,
            set: fn ($value) => empty($value) ? $this->icon_plant : $value,
        );
    }

    public function userPlants()
    {
        return $this->hasMany(UserPlant::class);
    }
}
