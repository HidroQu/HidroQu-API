<?php

namespace App\Actions\Plant;

use App\DataTransferObjects\Plant\UserPlantData;
use App\Models\UserPlant;
use Holiq\ActionData\Foundation\Action;

readonly class StoreUserPlantAction extends Action
{
    /**
     * @return array<string, mixed>
     */
    public function execute(UserPlantData $data): array
    {
        return UserPlant::query()->create($data->toArray())->toArray();
    }
}