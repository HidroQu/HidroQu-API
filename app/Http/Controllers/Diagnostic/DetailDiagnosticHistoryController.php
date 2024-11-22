<?php

namespace App\Http\Controllers\Diagnostic;

use App\Concerns\ApiResponse;
use App\Http\Controllers\Controller;
use App\Models\DiagnosticHistory;
use App\Models\UserPlant;

class DetailDiagnosticHistoryController extends Controller
{
    use ApiResponse;

    public function __invoke(UserPlant $userPlant, DiagnosticHistory $diagnosticHistory)
    {
        $userPlant->load(['plant']);
        $diagnosticHistory->load(['diagnostic']);

        return $this->resolveSuccessResponse(
            message: 'Success get detail diagnostic history',
            data: [
                'diagnostic_history' => $diagnosticHistory->toArray(),
                'user_plant' => $userPlant->toArray(),
            ]
        );
    }
}
