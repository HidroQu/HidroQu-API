<?php

namespace App\Http\Controllers\Profile;

use App\Actions\Profile\UpdateProfileAction;
use App\Actions\UploadImageAction;
use App\Concerns\ApiResponse;
use App\DataTransferObjects\Profile\ProfileData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Profile\UpdateProfileRequest;
use Illuminate\Http\JsonResponse;

class UpdateProfileController extends Controller
{
    use ApiResponse;

    /**
     * @throws \CuyZ\Valinor\Mapper\MappingError
     */
    public function __invoke(UpdateProfileRequest $request): JsonResponse
    {
        /** @var \App\Models\User $user */
        $user = auth()->user();

        /** @var \Illuminate\Http\UploadedFile | null $photo */
        $photo = $request->file('photo');

        $data = UpdateProfileAction::resolve()->execute(
            data: ProfileData::resolve(
                data: [
                    ...$request->validated(),
                    'photo' => UploadImageAction::resolve()->execute($photo, 'profiles'),
                ]
            ),
            user: $user
        );

        return $this->resolveSuccessResponse(
            message: 'Profile updated successfully.',
            data: $data,
        );
    }
}
