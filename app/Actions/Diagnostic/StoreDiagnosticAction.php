<?php

namespace App\Actions\Diagnostic;

use App\DataTransferObjects\Diagnostic\DiagnosticData;
use App\Models\DiagnosticHistory;
use Holiq\ActionData\Foundation\Action;

readonly class StoreDiagnosticAction extends Action
{
    /**
     * @return array<string, mixed>
     */
    public function execute(DiagnosticData $data): array
    {
        return DiagnosticHistory::query()->create($data->toArray())->toArray();
    }
}
