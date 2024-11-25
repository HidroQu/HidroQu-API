<?php

namespace App\Http\Controllers\Profile;

use App\Concerns\ApiResponse;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\JsonResponse;

class DetailProfileController extends Controller
{
    use ApiResponse;

    public function __invoke(): JsonResponse
    {
        $data = User::query()->findOrFail(auth()->id());

        return $this->resolveSuccessResponse(
            message: 'Success',
            data: $data->toArray(),
        );
    }
}
