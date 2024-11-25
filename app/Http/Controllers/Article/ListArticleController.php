<?php

namespace App\Http\Controllers\Article;

use App\Concerns\ApiResponse;
use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\JsonResponse;

class ListArticleController extends Controller
{
    use ApiResponse;

    public function __invoke(): JsonResponse
    {
        $data = Article::query()->with(['user'])->latest()->paginate(10);

        return $this->resolveSuccessResponse(
            message: 'Success get list article',
            data: $data->toArray(),
        );
    }
}
