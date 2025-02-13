<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class Diagnostic extends Model
{
    protected $fillable = [
        'disease_name',
        'disease_label',
        'image_disease',
        'indication',
        'cause',
        'solution',
    ];

    protected $casts = [
        'image_disease' => 'array',
    ];

    protected function imageDisease(): Attribute
    {
        return Attribute::make(
            set: fn ($value) => empty($value) ? json_encode($this->image_disease) : json_encode($value),
        );
    }

    public function diagnosticHistories()
    {
        return $this->hasMany(DiagnosticHistory::class);
    }
}
