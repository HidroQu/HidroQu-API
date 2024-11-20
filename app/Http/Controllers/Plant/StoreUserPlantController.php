<?php

namespace App\Http\Controllers\Plant;

use App\Actions\Plant\StoreUserPlantAction;
use App\Concerns\ApiResponse;
use App\DataTransferObjects\Plant\UserPlantData;
use App\Enums\HttpStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\Plant\StoreUserPlantRequest;
use Illuminate\Http\JsonResponse;

class StoreUserPlantController extends Controller
{
    use ApiResponse;

    /**
     * @throws \CuyZ\Valinor\Mapper\MappingError
     */
    public function __invoke(StoreUserPlantRequest $request): JsonResponse
    {
        $data = StoreUserPlantAction::resolve()->execute(
            data: UserPlantData::resolve(data: [
                ...$request->validated(),
                'user_id' => auth()->id(),
            ])
        );

        return $this->resolveSuccessResponse(
            message: 'Plant created successfully',
            data: $data,
            status: HttpStatus::Created
        );
    }
}