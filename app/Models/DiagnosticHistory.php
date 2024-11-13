<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DiagnosticHistory extends Model
{
    protected $fillable = [
        'user_id',
        'user_plant_id', 
        'diagnostic_id', 
        'diagnosis_date'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function userPlant()
    {
        return $this->belongsTo(UserPlant::class);
    }

    public function diagnostic()
    {
        return $this->belongsTo(Diagnostic::class);
    }
}
