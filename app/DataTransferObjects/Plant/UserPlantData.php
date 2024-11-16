<?php

namespace App\DataTransferObjects\Plant;

use Holiq\ActionData\Foundation\DataTransferObject;

readonly class UserPlantData extends DataTransferObject
{
    final public function __construct(
        public int | string $userId,
        public int | string $plantId,
        public string $plantingDate,
        public ?string $notes = null,
    ) {}
}
