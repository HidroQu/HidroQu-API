<?php

namespace App\Actions\Plant;

use Holiq\ActionData\Foundation\Action;

readonly class StoreUserPlantAction extends Action
{
    public function execute(UserPlantData $data)
    {
    /** @var \App\Models\User $user */
    $user = auth()->user();

    if ($user->id !== $data->user_id) {
        abort(403, 'Unauthorized action.');
    }

        return UserPlant::create([
            'user_id' => $data->user_id,
            'plant_id' => $data->plant_id,
            'planting_date' => $data->planting_date,
            'notes' => $data->notes,
        ]);
    }
}
