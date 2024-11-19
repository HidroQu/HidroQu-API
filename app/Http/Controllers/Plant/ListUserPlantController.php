<?php

namespace App\Http\Controllers\Plant;

use App\Actions\Plant\ListUserPlantAction;
use App\Concerns\ApiResponse;
use App\Http\Requests\Plant\ListUserPlantRequest;
use Illuminate\Http\JsonResponse;

class ListUserPlantController
{
    use ApiResponse;

    /**
     * @throws \Throwable
     */
    public function __invoke(ListUserPlantRequest $request): JsonResponse
    {
        $data = ListUserPlantAction::resolve()->execute(
            data: $request->validated() 
        );

        return $this->resolveSuccessResponse(
            message: 'Successfully fetched list of user plants with plant details',
            data: $data
        );
    }
}
