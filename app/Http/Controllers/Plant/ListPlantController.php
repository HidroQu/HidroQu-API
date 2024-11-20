<?php

namespace App\Http\Controllers\Plant;

use App\Concerns\ApiResponse;
use App\Models\Plant;
use Illuminate\Http\JsonResponse;

class ListPlantController
{
    use ApiResponse;

    public function __invoke(): JsonResponse
    {
        $data = Plant::query()->get();

        return $this->resolveSuccessResponse(
            message: 'Plants retrieved successfully',
            data: $data,
        );
    }
}
