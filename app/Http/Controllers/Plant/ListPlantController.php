<?php

namespace App\Http\Controllers\Plant;

use App\Http\Controllers\Controller;
use App\Concerns\ApiResponse;
use App\Http\Requests\Plant\ListPlantRequest;
use App\Models\Plant;
use Illuminate\Http\JsonResponse;

class ListPlantController extends Controller
{
    use ApiResponse;

    /**
     * Handle the incoming request.
     */
    public function __invoke(ListPlantRequest $request): JsonResponse
    {
        try {
            $filters = $request->only(['name', 'latin_name']);
            $page = $request->input('page', 1);
            $limit = $request->input('limit', 10);

            $plantsQuery = Plant::query();

            if (!empty($filters['name'])) {
                $plantsQuery->where('name', 'LIKE', '%' . $filters['name'] . '%');
            }

            if (!empty($filters['latin_name'])) {
                $plantsQuery->where('latin_name', 'LIKE', '%' . $filters['latin_name'] . '%');
            }

            $plants = $plantsQuery->paginate($limit, ['*'], 'page', $page);

            return $this->resolveSuccessResponse(
                message: 'Plants retrieved successfully.',
                data: [
                    'plants' => $plants->items(),
                    'pagination' => [
                        'current_page' => $plants->currentPage(),
                        'last_page' => $plants->lastPage(),
                        'per_page' => $plants->perPage(),
                        'total' => $plants->total(),
                    ],
                ]
            );
        } catch (\Exception $e) {
            return $this->resolveFailedResponse(
                message: 'Failed to retrieve plants.',
                errors: ['exception' => $e->getMessage()]
            );
        }
    }
}
