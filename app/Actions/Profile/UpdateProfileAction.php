<?php

namespace App\Actions\Profile;

use App\DataTransferObjects\Profile\ProfileData;
use App\Models\User;
use Holiq\ActionData\Foundation\Action;

readonly class UpdateProfileAction extends Action
{
    /**
     * @return array<string, mixed>
     */
    public function execute(ProfileData $data, User $user): array
    {
        $user->update($data->toArray());

        return $user->toArray();
    }
}
