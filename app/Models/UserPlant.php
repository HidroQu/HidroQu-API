<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserPlant extends Model
{
    protected $fillable = [
        'user_id',
        'plant_id',
        'planting_date',
        'notes'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function plant()
    {
        return $this->belongsTo(Plant::class);
    }

    public function diagnosticHistories()
    {
        return $this->hasMany(DiagnosticHistory::class);
    }
}
