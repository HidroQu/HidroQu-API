<?php

namespace App\Http\Controllers\Plant;

use App\Actions\Plant\DetailUserPlantAction;
use App\Concerns\ApiResponse;
use App\Http\Requests\Plant\DetailUserPlantRequest;
use Illuminate\Http\JsonResponse;

class DetailUserPlantController
{
    use ApiResponse;

    /**
     * @throws \Throwable
     */
    public function __invoke(DetailUserPlantRequest $request): JsonResponse
    {
        $data = DetailUserPlantAction::resolve()->execute(
            data: $request->validated() 
        );

        return $this->resolveSuccessResponse(
            message: 'Successfully fetched user plant details',
            data: $data
        );
    }
}
