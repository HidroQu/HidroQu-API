<?php

namespace App\Http\Controllers\Community;

use App\Http\Controllers\Controller;
use App\Models\Community;
use Illuminate\Http\Request;

class DetailCommunityController extends Controller
{
    use ApiResponse;

    public function __invoke(Community $community): JsonResponse
    {
        $community->load(['user', 'comments']);

        return $this->resolveSuccessResponse(
            message: 'Successfully fetched community details',
            data: $community->toArray()
        );
    }
}
