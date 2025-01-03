<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiagnosticHistory extends Model
{
    protected $fillable = [
        'user_plant_id',
        'diagnostic_id',
        'diagnostic_image',
        'diagnostic_date',
    ];

    public function userPlant()
    {
        return $this->belongsTo(UserPlant::class);
    }

    public function diagnostic()
    {
        return $this->belongsTo(Diagnostic::class);
    }
}
