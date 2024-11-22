<?php

namespace App\Http\Controllers\Community;

use App\Concerns\ApiResponse;
use App\Http\Controllers\Controller;
use App\Models\Community;

class DetailCommunityController extends Controller
{
    use ApiResponse;

    public function __invoke(Community $community)
    {
        $community->load('comments.replies');

        return $this->resolveSuccessResponse('success', $community->toArray());
    }
}
