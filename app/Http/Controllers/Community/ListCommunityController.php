<?php

namespace App\Http\Controllers\Community;

use App\Concerns\ApiResponse;
use App\Http\Controllers\Controller;
use App\Models\Community;
use Illuminate\Http\Request;

class ListCommunityController extends Controller
{
    use ApiResponse;

    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $data = Community::latest()->get();

        return $this->resolveSuccessResponse('success', $data);
    }
}
