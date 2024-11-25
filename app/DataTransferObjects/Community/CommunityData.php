<?php

namespace App\DataTransferObjects\Community;

use Holiq\ActionData\Foundation\DataTransferObject;

readonly class CommunityData extends DataTransferObject
{
    final public function __construct(
        public string $title,
        public string $content,
        public int $userId,
        public ?string $image = null,
    ) {}
}
