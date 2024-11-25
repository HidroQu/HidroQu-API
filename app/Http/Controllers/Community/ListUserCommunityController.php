<?php

namespace App\Http\Controllers\Community;

use App\Concerns\ApiResponse;
use App\Http\Controllers\Controller;
use App\Models\Community;
use Illuminate\Http\JsonResponse;

class ListUserCommunityController extends Controller
{
    use ApiResponse;

    public function __invoke(): JsonResponse
    {
        $data = Community::query()->with(['user'])->withCount('comments')->where('user_id', auth()->id())->paginate(10);

        return $this->resolveSuccessResponse(
            message: 'Successfully fetched list of user communities',
            data: $data->toArray(),
        );
    }
}
