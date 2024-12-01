<?php

namespace App\Http\Controllers\Diagnostic;

use App\Actions\Diagnostic\StoreDiagnosticAction;
use App\Actions\UploadImageAction;
use App\Concerns\ApiResponse;
use App\DataTransferObjects\Diagnostic\DiagnosticData;
use App\Http\Controllers\Controller;
use App\Http\Requests\Diagnostic\StoreDiagnosticRequest;
use Illuminate\Http\JsonResponse;

class StoreDiagnosticController extends Controller
{
    use ApiResponse;

    /**
     * @throws \CuyZ\Valinor\Mapper\MappingError
     */
    public function __invoke(StoreDiagnosticRequest $request): JsonResponse
    {
        /** @var \Illuminate\Http\UploadedFile | null $image */
        $image = $request->file('diagnostic_image');

        $data = StoreDiagnosticAction::resolve()->execute(
            data: DiagnosticData::resolve(
                data: [
                    ...$request->validated(),
                    'diagnostic_image' => UploadImageAction::resolve()->execute($image, 'histories'),
                ]
            ),
        );

        return $this->resolveSuccessResponse(
            message: 'Successfully history diagnostic.',
            data: $data,
        );
    }
}
