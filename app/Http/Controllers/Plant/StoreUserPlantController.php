<?php

namespace App\Http\Controllers\Plant;

use App\Http\Controllers\Controller;
use App\Actions\Plant\StoreUserPlantAction;
use App\Concerns\ApiResponse;
use App\DataTransferObjects\Plant\UserPlantData;
use App\Http\Requests\Plant\StoreUserPlantRequest;
use Illuminate\Http\JsonResponse;

class StoreUserPlantController extends Controller
{
    use ApiResponse;

    /**
     * Handle the incoming request.
     */
    public function __invoke(StoreUserPlantRequest $request): JsonResponse
    {
        try {
            // Resolve the data transfer object
            $data = UserPlantData::resolve($request->validated());

            // Execute the action
            $userPlant = StoreUserPlantAction::resolve()->execute($data);

            return $this->resolveSuccessResponse(
                message: 'User plant stored successfully.',
                data: ['userPlant' => $userPlant]
            );
        } catch (\Exception $e) {
            return $this->resolveFailedResponse(
                message: 'Failed to store user plant.',
                errors: ['exception' => $e->getMessage()]
            );
        }
    }
}
