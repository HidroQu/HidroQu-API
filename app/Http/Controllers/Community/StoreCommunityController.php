<?php

namespace App\Http\Controllers\Community;

use App\Actions\Community\StoreCommunityAction;
use App\Actions\UploadImageAction;
use App\Concerns\ApiResponse;
use App\DataTransferObjects\Community\CommunityData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Community\StoreCommunityRequest;
use Illuminate\Http\JsonResponse;

class StoreCommunityController extends Controller
{
    use ApiResponse;

    /**
     * @throws \CuyZ\Valinor\Mapper\MappingError
     */
    public function __invoke(StoreCommunityRequest $request): JsonResponse
    {
        /** @var \Illuminate\Http\UploadedFile | null $image */
        $image = $request->file('image');

        $data = StoreCommunityAction::resolve()->execute(
            data: CommunityData::resolve(
                data: [
                    ...$request->validated(),
                    'user_id' => auth()->id(),
                    'image' => UploadImageAction::resolve()->execute($image),
                ]
            ),
        );

        return $this->resolveSuccessResponse(
            message: 'Community has been created.',
            data: $data,
        );
    }
}
