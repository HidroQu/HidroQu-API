<?php

namespace App\Http\Controllers\Plant;

use App\Concerns\ApiResponse;
use App\Models\UserPlant;
use Illuminate\Http\JsonResponse;

class DetailUserPlantController
{
    use ApiResponse;

    public function __invoke(UserPlant $userPlant): JsonResponse
    {
        $userPlant->load(['plant', 'user', 'diagnosticHistories']);

        return $this->resolveSuccessResponse(
            message: 'Successfully fetched user plant details',
            data: $userPlant->toArray()
        );
    }
}
