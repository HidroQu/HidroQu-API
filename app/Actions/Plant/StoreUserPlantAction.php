<?php

namespace App\Actions\Plant;

use App\Models\UserPlant;
use Holiq\ActionData\Foundation\Action;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

readonly class StoreUserPlantAction extends Action
{
    /**
     * @throws \Throwable
     */
    public function execute(UserPlantData $data): UserPlant
    {
        throw_unless(
            condition: Auth::check() && Auth::user()->id === $data->user_id,
            exception: ValidationException::withMessages([
                'user_id' => trans('auth.unauthorized'),
            ])
        );

        return UserPlant::create([
            'user_id' => $data->user_id,
            'plant_id' => $data->plant_id,
            'planting_date' => $data->planting_date,
            'notes' => $data->notes,
        ]);
    }
}
