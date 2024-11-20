<?php

namespace App\Http\Controllers\Plant;

use App\Concerns\ApiResponse;
use App\Models\UserPlant;
use Illuminate\Http\JsonResponse;

class ListUserPlantController
{
    use ApiResponse;

    public function __invoke(): JsonResponse
    {
        $data = UserPlant::query()->with(['plant'])->where('user_id', auth()->id())->paginate(10);

        return $this->resolveSuccessResponse(
            message: 'Successfully fetched list of user plants with plant details',
            data: $data->toArray(),
        );
    }
}
