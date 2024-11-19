<?php

namespace App\Http\Controllers\Plant;

use App\Http\Controllers\Controller;
use App\Concerns\ApiResponse;
use App\Http\Requests\Plant\ListUserPlantRequest;
use App\Models\UserPlant;
use Illuminate\Http\JsonResponse;

class ListUserPlantController extends Controller
{
    use ApiResponse;

    /**
     * Handle the incoming request.
     */
    public function __invoke(ListUserPlantRequest $request): JsonResponse
    {
        try {
            $userId = $request->input('user_id', auth()->id());
            $page = $request->input('page', 1);
            $limit = $request->input('limit', 10);

            $userPlantsQuery = UserPlant::query()->where('user_id', $userId);

            $userPlants = $userPlantsQuery->paginate($limit, ['*'], 'page', $page);

            return $this->resolveSuccessResponse(
                message: 'User plants retrieved successfully.',
                data: [
                    'userPlants' => $userPlants->items(),
                    'pagination' => [
                        'current_page' => $userPlants->currentPage(),
                        'last_page' => $userPlants->lastPage(),
                        'per_page' => $userPlants->perPage(),
                        'total' => $userPlants->total(),
                    ],
                ]
            );
        } catch (\Exception $e) {
            return $this->resolveFailedResponse(
                message: 'Failed to retrieve user plants.',
                errors: ['exception' => $e->getMessage()]
            );
        }
    }
}
