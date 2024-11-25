<?php

namespace App\Http\Controllers\Community;

use App\Concerns\ApiResponse;
use App\Http\Controllers\Controller;
use App\Models\Community;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ListUserCommunityController extends Controller
{
    use ApiResponse;

    public function __invoke(Request $request): JsonResponse
    {
        $communities = Community::query()->with(['user'])->withCount('comments')->where('user_id', auth()->id());

        if ($request->filled('search')) {
            $communities->where('title', 'like', '%'.$request->search.'%');
        }

        $data = $communities->paginate(10);

        return $this->resolveSuccessResponse(
            message: 'Successfully fetched list of user communities',
            data: $data->toArray(),
        );
    }
}
