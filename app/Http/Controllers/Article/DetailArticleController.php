<?php

namespace App\Http\Controllers\Article;

use App\Concerns\ApiResponse;
use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\JsonResponse;

class DetailArticleController extends Controller
{
    use ApiResponse;

    public function __invoke(Article $article): JsonResponse
    {
        $article->load(['user']);

        return $this->resolveSuccessResponse(
            message: 'Success get detail article',
            data: $article->toArray()
        );
    }
}
