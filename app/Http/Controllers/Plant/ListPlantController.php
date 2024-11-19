<?php

namespace App\Http\Controllers\Plant;

use App\Actions\Plant\ListPlantAction;
use App\Concerns\ApiResponse;
use App\DataTransferObjects\Plant\ListPlantData;
use App\Http\Requests\Plant\ListPlantRequest;
use Illuminate\Http\JsonResponse;

class ListPlantController
{
    use ApiResponse;

    /**
     * @throws \Throwable
     */
    public function __invoke(ListPlantRequest $request): JsonResponse
    {
        $data = ListPlantAction::resolve()->execute(
            data: ListPlantData::resolve(data: $request->validated())
        );

        return $this->resolveSuccessResponse(
            message: 'Plants retrieved successfully',
            data: $data,
        );
    }
}
