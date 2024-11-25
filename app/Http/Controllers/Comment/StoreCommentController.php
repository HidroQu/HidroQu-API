<?php

namespace App\Http\Controllers\Comment;

use App\Actions\Comment\StoreCommentAction;
use App\Actions\UploadImageAction;
use App\Concerns\ApiResponse;
use App\DataTransferObjects\Comment\CommentData;
use App\Enums\HttpStatus;
use App\Http\Controllers\Controller;
use App\Http\Requests\Comment\StoreCommentRequest;
use App\Models\Community;
use Illuminate\Http\JsonResponse;

class StoreCommentController extends Controller
{
    use ApiResponse;

    /**
     * @throws \CuyZ\Valinor\Mapper\MappingError
     */
    public function __invoke(Community $community, StoreCommentRequest $request): JsonResponse
    {
        /** @var \Illuminate\Http\UploadedFile | null $image */
        $image = $request->file('image');

        $data = StoreCommentAction::resolve()->execute(
            data: CommentData::resolve(
                data: [
                    ...$request->validated(),
                    'community_id' => $community->id,
                    'user_id' => auth()->id(),
                    'image' => UploadImageAction::resolve()->execute($image, 'comments'),
                ]
            ),
        );

        return $this->resolveSuccessResponse(
            message: 'Successfully created comment.',
            data: $data,
            status: HttpStatus::Created
        );
    }
}
