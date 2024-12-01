<?php

namespace App\DataTransferObjects\Diagnostic;

use Holiq\ActionData\Foundation\DataTransferObject;

readonly class DiagnosticData extends DataTransferObject
{
    final public function __construct(
        public string | int $userPlantId,
        public string | int $diagnosticId,
        public string $diagnosticImage,
        public string $diagnosticDate
    ) {}
}
