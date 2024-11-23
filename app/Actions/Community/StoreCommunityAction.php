<?php

namespace App\Actions\Community;

use App\DataTransferObjects\Community\CommunityData;
use App\Models\Community;
use Holiq\ActionData\Foundation\Action;

readonly class StoreCommunityAction extends Action
{
    /**
     * @return array<string, mixed>
     */
    public function execute(CommunityData $data): array
    {
        return Community::query()->create($data->toArray())->toArray();
    }
}
