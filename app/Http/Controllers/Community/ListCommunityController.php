<?php

namespace App\Http\Controllers\Community;

use App\Concerns\ApiResponse;
use App\Http\Controllers\Controller;
use App\Models\Community;
use Illuminate\Http\JsonResponse;

class ListCommunityController extends Controller
{
    use ApiResponse;

    public function __invoke(): JsonResponse
    {
        $data = Community::query()->with(['user', 'comments'])->get();

        return $this->resolveSuccessResponse(
            message: 'Community retrieved successfully',
            data: $data->toArray(), 
        );
    }
}

