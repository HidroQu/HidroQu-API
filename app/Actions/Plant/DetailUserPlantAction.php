<?php

namespace App\Actions\Plant;

use App\Models\UserPlant;
use Holiq\ActionData\Foundation\Action;

readonly class DetailUserPlantAction extends Action
{
    /**
     * @return array<string, mixed>
     */
    public function execute(array $data): array
    {
        $userPlant = UserPlant::query()
            ->where('user_id', $data['user_id'])
            ->where('plant_id', $data['plant_id'])
            ->first();

        if (!$userPlant) {
            throw new \Illuminate\Database\Eloquent\ModelNotFoundException("User plant not found.");
        }

        return $userPlant; 
    }
}
