<?php

namespace App\Actions\Plant;

use App\Models\UserPlant;
use Holiq\ActionData\Foundation\Action;

readonly class ListUserPlantAction extends Action
{
    /**
     * @return array<string, mixed>
     */
    public function execute(array $data): array
    {
        $query = UserPlant::query();

        if (isset($data['user_id'])) {
            $query->where('user_id', $data['user_id']);
        }

        $page = $data['page'] ?? 1;
        $limit = $data['limit'] ?? 10;

        $userPlants = $query->with('plant')
            ->paginate($limit, ['*'], 'page', $page);

        return $userPlants->toArray(); 
    }
}
