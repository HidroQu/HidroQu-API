<?php

namespace App\Http\Controllers\Article;

use App\Concerns\ApiResponse;
use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ListArticleController extends Controller
{
    use ApiResponse;

    public function __invoke(Request $request): JsonResponse
    {
        $articles = Article::query()->with(['user'])->latest();

        if ($request->filled('search')) {
            $articles->where('title', 'like', '%'.$request->search.'%');
        }

        $data = $articles->paginate(10);

        return $this->resolveSuccessResponse(
            message: 'Success get list article',
            data: $data->toArray(),
        );
    }
}
