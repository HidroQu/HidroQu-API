<?php

namespace App\Http\Controllers\Plant;

use App\Http\Controllers\Controller;
use App\Actions\Plant\GetDetailUserPlantAction;
use App\Concerns\ApiResponse;
use App\DataTransferObjects\Plant\DetailUserPlantData;
use App\Http\Requests\Plant\DetailUserPlantRequest;
use Illuminate\Http\JsonResponse;

class DetailUserPlantController extends Controller
{
    use ApiResponse;

    public function __invoke(DetailUserPlantRequest $request): JsonResponse
    {
        try {
            $data = DetailUserPlantData::resolve($request->validated());

            $userPlant = GetDetailUserPlantAction::resolve()->execute($data);

            return $this->resolveSuccessResponse(
                message: 'User plant details retrieved successfully.',
                data: ['userPlant' => $userPlant]
            );
        } catch (\Exception $e) {
            return $this->resolveFailedResponse(
                message: 'Failed to retrieve user plant details.',
                errors: ['exception' => $e->getMessage()]
            );
        }
    }
}
