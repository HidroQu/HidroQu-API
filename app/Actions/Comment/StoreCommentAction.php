<?php

namespace App\Actions\Comment;

use App\DataTransferObjects\Comment\CommentData;
use App\Models\Comment;
use Holiq\ActionData\Foundation\Action;

readonly class StoreCommentAction extends Action
{
    /**
     * @return array<string, mixed>
     */
    public function execute(CommentData $data): array
    {
        return Comment::query()->create($data->toArray())->toArray();
    }
}
