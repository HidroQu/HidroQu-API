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
            set: function ($value) {
                if (empty($value)) {
                    return json_encode($this->image_disease);
                } else {
                    $data = [];
                    foreach ($value as $image) {
                        $data[] = asset('storage/'.$image);
                    }

                    return json_encode($data);
                }
            },
        );
    }

    public function diagnosticHistories()
    {
        return $this->hasMany(DiagnosticHistory::class);
    }
}
