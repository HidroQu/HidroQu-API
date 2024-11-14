<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diagnostic extends Model
{
    protected $fillable = [
        'disease_name',
        'indication',
        'cause',
        'solution'];

    public function diagnosticHistories()
    {
        return $this->hasMany(DiagnosticHistory::class);
    }
}
