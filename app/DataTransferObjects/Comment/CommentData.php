<?php

namespace App\DataTransferObjects\Comment;

use Holiq\ActionData\Foundation\DataTransferObject;

readonly class CommentData extends DataTransferObject
{
    final public function __construct(
        public int $communityId,
        public int $userId,
        public string $content,
        public ?string $commentId = null,
        public ?string $image = null,
    ) {}
}
