<?php

namespace App\Http\Controllers\Community;

use App\Concerns\ApiResponse;
use App\Http\Controllers\Controller;
use App\Models\Community;
use Illuminate\Http\JsonResponse;

class DetailCommunityController extends Controller
{
    use ApiResponse;

    public function __invoke(Community $community): JsonResponse
    {
        $community->load(['user', 'getComments.user', 'getComments.replies.user']);

        return $this->resolveSuccessResponse(
            message: 'Successfully fetched community details',
            data: $community->toArray()
        );
    }
}
