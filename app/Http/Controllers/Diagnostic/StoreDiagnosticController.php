<?php

namespace App\Http\Controllers\Diagnostic;

use App\Actions\Diagnostic\StoreDiagnosticAction;
use App\Concerns\ApiResponse;
use App\DataTransferObjects\DiagnosticData;
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
        $data = StoreDiagnosticAction::resolve()->execute(
            data: DiagnosticData::resolve($request->validated()),
        );

        return $this->resolveSuccessResponse(
            message: 'Successfully history diagnostic.',
            data: $data,
        );
    }
}
